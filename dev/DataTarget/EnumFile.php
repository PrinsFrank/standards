<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataTarget;

use BackedEnum;
use PrinsFrank\Standards\Dev\DataSource\Sorting\SortingInterface;
use PrinsFrank\Standards\Dev\Exception\EnumNotFoundException;
use PrinsFrank\Standards\Dev\Exception\TransliterationException;
use RuntimeException;

class EnumFile
{
    public readonly string $path;

    /** @var EnumCase[] */
    private array $cases = [];

    /** @var EnumMethod[] */
    private array $methods = [];

    /** @param class-string<BackedEnum> $fqn */
    public function __construct(
        public readonly string $fqn
    ) {
        $this->path = dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . str_replace(['PrinsFrank\\Standards\\', '\\'], ['', DIRECTORY_SEPARATOR], $fqn) . '.php';
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
     */
    public function writeCases(SortingInterface $sorting): self
    {
        $enumContent    = $this->getContent();
        $startEnum      = mb_strpos($enumContent, '{');
        $endEnumPos     = mb_strrpos($enumContent, '}');
        if ($startEnum === false || $endEnumPos === false) {
            throw new EnumNotFoundException();
        }

        $firstMethodPos = mb_strpos($enumContent, ' public ');
        $newEnumContent = mb_substr($enumContent, 0, $startEnum + 1) . PHP_EOL;
        $cases          = array_unique($this->cases);
        usort($cases, $sorting);
        foreach ($cases as $case) {
            $newEnumContent .= '    ' . $case->toString($this->fqn);
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
            $enumContent                  = $this->getContent();
            $startExistingMethod          = mb_strpos($enumContent, '    public function ' . $method->name . '()');
            $endPosMethodOrLastClosingTag = mb_strpos($enumContent, '    public function', $startExistingMethod === false ? 0 : $startExistingMethod + 1);
            if ($endPosMethodOrLastClosingTag === false) {
                $endPosMethodOrLastClosingTag = mb_strrpos($enumContent, '}');
            }

            if ($endPosMethodOrLastClosingTag === false) {
                throw new RuntimeException('Couldn\'t locate closing tag');
            }

            if ($startExistingMethod !== false) {
                $newEnumContent = mb_substr($enumContent, 0, $startExistingMethod) . $method->__toString() . mb_substr($enumContent, $endPosMethodOrLastClosingTag);
            } else {
                $newEnumContent = mb_substr($enumContent, 0, $endPosMethodOrLastClosingTag) . $method->__toString() . mb_substr($enumContent, $endPosMethodOrLastClosingTag);
            }

            $this->putContent($newEnumContent);
        }
    }
}
