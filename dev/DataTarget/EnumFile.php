<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataTarget;

use BackedEnum;
use PrinsFrank\Standards\Dev\DataSource\Sorting\Sorting;
use PrinsFrank\Standards\Dev\Exception\EnumNotFoundException;
use PrinsFrank\Standards\Dev\Exception\TransliterationException;
use PrinsFrank\Standards\InvalidArgumentException;
use PrinsFrank\Standards\Scripts\ScriptAlias;
use PrinsFrank\Transliteration\Exception\RecursionException;
use PrinsFrank\Transliteration\Exception\UnableToCreateTransliteratorException;
use RuntimeException;

/** @internal */
class EnumFile
{
    public readonly string $path;

    /** @var EnumCase[] */
    private array $cases = [];

    /** @var EnumMethod[] */
    private array $methods = [];

    /**
     * @param class-string<BackedEnum> $enumFQN
     * @param class-string<Sorting> $sortingFQN
     */
    public function __construct(
        public readonly string $enumFQN,
        public readonly string $sortingFQN,
    ) {
        $this->path = dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . str_replace(['PrinsFrank\\Standards\\', '\\'], ['', DIRECTORY_SEPARATOR], $enumFQN) . '.php';
    }

    public function addCase(EnumCase $enumCase): self
    {
        $this->cases[] = $enumCase;

        return $this;
    }

    public function addMethod(EnumMethod $method): self
    {
        $this->methods[] = $method;

        return $this;
    }

    public function hasCases(): bool
    {
        return count($this->cases) > 0;
    }

    public function hasCaseWithValue(string|int $value): bool
    {
        foreach ($this->cases as $case) {
            if ($case->value === $value) {
                return true;
            }
        }

        return false;
    }

    /** @throws EnumNotFoundException */
    private function getContent(): string
    {
        $content = file_get_contents($this->path);
        if ($content === false) {
            throw new EnumNotFoundException();
        }

        return $content;
    }

    private function putContent(string $content): self
    {
        file_put_contents($this->path, $content);

        return $this;
    }

    /**
     * @throws EnumNotFoundException
     * @throws TransliterationException
     * @throws InvalidArgumentException
     * @throws UnableToCreateTransliteratorException
     * @throws RecursionException
     * @throws \PrinsFrank\Transliteration\Exception\InvalidArgumentException
     */
    public function writeCases(): self
    {
        $enumContent = $this->getContent();
        $startEnum = mb_strpos($enumContent, '{');
        $endEnumPos = mb_strrpos($enumContent, '}');
        if ($startEnum === false || $endEnumPos === false) {
            throw new EnumNotFoundException();
        }

        $firstMethodPos = mb_strpos($enumContent, ' public ');
        $newEnumContent = mb_substr($enumContent, 0, $startEnum + 1);
        $keyedCases = [];
        foreach ($this->cases as $case) {
            $keyedCases[$case->name . (is_string($case->value) ? ScriptAlias::mostCommonInString($case->value)->value ?? '' : '') . $case->value] = $case;
        }

        $deduplicatedCases = array_values($keyedCases);
        usort($deduplicatedCases, new $this->sortingFQN());
        foreach ($deduplicatedCases as $key => $case) {
            $newEnumContent .= $case->toString($this->enumFQN, '    ', $key === 0);
        }
        $newEnumContent .= mb_substr($enumContent, $firstMethodPos !== false ? ($firstMethodPos - 5) : ($endEnumPos - 1));

        return $this->putContent($newEnumContent);
    }

    /**
     * @throws EnumNotFoundException
     * @throws RuntimeException
     */
    public function writeMethods(): void
    {
        foreach ($this->methods as $method) {
            $enumContent = $this->getContent();
            $startExistingMethod = mb_strpos($enumContent, '    public function ' . $method->name . '()');
            $nextMethodPos = mb_strpos($enumContent, PHP_EOL . '    public function', $startExistingMethod === false ? 0 : $startExistingMethod + 1);
            $lastClosingTagPos = false;
            if ($nextMethodPos === false) {
                $lastClosingTagPos = mb_strrpos($enumContent, PHP_EOL . '}');
            }

            if ($nextMethodPos === false && $lastClosingTagPos === false) {
                throw new RuntimeException('Couldn\'t locate closing tag');
            }

            $endPosMethodOrLastClosingTag = ($nextMethodPos !== false ? $nextMethodPos : $lastClosingTagPos);
            if ($startExistingMethod !== false) {
                $newEnumContent = mb_substr($enumContent, 0, $startExistingMethod) . $method->__toString() . ($nextMethodPos !== false ? PHP_EOL : '') . mb_substr($enumContent, $endPosMethodOrLastClosingTag);
            } else {
                $newEnumContent = mb_substr($enumContent, 0, $endPosMethodOrLastClosingTag) . $method->__toString() . ($nextMethodPos !== false ? PHP_EOL : '') . mb_substr($enumContent, $endPosMethodOrLastClosingTag);
            }

            $this->putContent($newEnumContent);
        }
    }
}
