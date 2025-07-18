<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataTarget;

use BackedEnum;
use PrinsFrank\Standards\Country\Groups\GroupInterface;
use PrinsFrank\Standards\Dev\DataSource\Sorting\Sorting;
use PrinsFrank\Standards\Dev\Exception\EnumNotFoundException;
use PrinsFrank\Standards\Dev\Exception\TransliterationException;
use PrinsFrank\Standards\InvalidArgumentException;
use PrinsFrank\Transliteration\Exception\RecursionException;
use PrinsFrank\Transliteration\Exception\UnableToCreateTransliteratorException;
use RuntimeException;

/** @internal */
class SpecFile {
    public readonly string $path;

    /** @var EnumCase[] */
    private array $cases = [];

    /** @var list<EnumMappingMethod|EnumListMethod> */
    private array $methods = [];

    /**
     * @param class-string<BackedEnum|GroupInterface> $FQN
     * @param class-string<Sorting> $sortingFQN
     */
    public function __construct(
        public readonly string $FQN,
        public readonly string $sortingFQN,
    ) {
        $this->path = dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . str_replace(['PrinsFrank\\Standards\\', '\\'], ['', DIRECTORY_SEPARATOR], $FQN) . '.php';
    }

    public function addCase(EnumCase $enumCase): self {
        $this->cases[] = $enumCase;

        return $this;
    }

    public function addMethod(EnumMappingMethod|EnumListMethod $method): self {
        $this->methods[] = $method;

        return $this;
    }

    public function hasCases(): bool {
        return count($this->cases) > 0;
    }

    public function hasCaseWithValue(string|int $value): bool {
        foreach ($this->cases as $case) {
            if ($case->value === $value || $case->previousValue === $value) {
                return true;
            }
        }

        return false;
    }

    public function hasCaseWithName(string $name): bool {
        foreach ($this->cases as $case) {
            if ($case->name === $name) {
                return true;
            }
        }

        return false;
    }

    /** @throws EnumNotFoundException */
    private function getContent(): string {
        $content = file_get_contents($this->path);
        if ($content === false) {
            throw new EnumNotFoundException();
        }

        return $content;
    }

    private function putContent(string $content): self {
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
    public function writeCases(): self {
        if (is_a($this->FQN, BackedEnum::class, true) === false) {
            throw new EnumNotFoundException();
        }

        $enumContent = $this->getContent();
        $startEnum = mb_strpos($enumContent, '{');
        $endEnumPos = mb_strrpos($enumContent, '}');
        if ($startEnum === false || $endEnumPos === false) {
            throw new EnumNotFoundException();
        }

        preg_match('/\n(?:\n\s{4}\/\*\*.*)?\n\s{4}public /u', $enumContent, $matches, PREG_OFFSET_CAPTURE, $startEnum + 1);
        $firstMethodPos = $matches[0][1] ?? null;
        if ($firstMethodPos !== null) {
            $firstMethodPos = mb_strlen(substr($enumContent, 0, $firstMethodPos)); // Convert to multibyte offset
        }
        $newEnumContent = mb_substr($enumContent, 0, $startEnum + 1);
        $keyedCases = [];
        foreach ($this->cases as $case) {
            $keyedCases[$case->getKey($this->FQN) . $case->value] = $case;
        }

        $deduplicatedCases = array_values($keyedCases);
        usort($deduplicatedCases, new $this->sortingFQN($this->FQN));
        foreach ($deduplicatedCases as $key => $case) {
            $newEnumContent .= $case->toString($this->FQN, '    ', $key === 0);
        }
        $newEnumContent .= mb_substr($enumContent, $firstMethodPos !== null ? $firstMethodPos : ($endEnumPos - 1));

        return $this->putContent($newEnumContent);
    }

    /**
     * @throws EnumNotFoundException
     * @throws RuntimeException
     */
    public function writeMethods(): void {
        foreach ($this->methods as $method) {
            $enumContent = $this->getContent();
            $startExistingMethod = $this->getMethodPos($method, $enumContent);
            $nextMethodPos = $this->getMethodPos(null, $enumContent, $startExistingMethod !== null ? $startExistingMethod + 4 + strlen($method->name . '()' . $method->returnType) + ($method->docBlock !== null ? strlen($method->docBlock) + 4 : 0) : 0);
            $lastClosingTagPos = false;
            if ($nextMethodPos === null) {
                $lastClosingTagPos = mb_strrpos($enumContent, PHP_EOL . '}');
            }

            if ($nextMethodPos === null && $lastClosingTagPos === false) {
                throw new RuntimeException('Couldn\'t locate closing tag');
            }

            $endPosMethodOrLastClosingTag = ($nextMethodPos !== null ? $nextMethodPos : $lastClosingTagPos);
            if ($startExistingMethod !== null) {
                $newEnumContent = mb_substr($enumContent, 0, $startExistingMethod) . $method->__toString() . ($nextMethodPos !== null ? PHP_EOL : '') . mb_substr($enumContent, $endPosMethodOrLastClosingTag);
            } else {
                $newEnumContent = mb_substr($enumContent, 0, $endPosMethodOrLastClosingTag) . $method->__toString() . ($nextMethodPos !== null ? PHP_EOL : '') . mb_substr($enumContent, $endPosMethodOrLastClosingTag);
            }

            $this->putContent($newEnumContent);
        }
    }

    private function getMethodPos(EnumMappingMethod|EnumListMethod|null $method, string $enumContent, int $offset = 0): ?int {
        $matched = preg_match('/(\n\h*\/\*\*.*\n?(\h*\*.*\n?)*\h*\*\/){0,1}\n\h*(public|private|protected)?\h*(static)?\h*function\h*' . ($method->name ?? '') . '/u', $enumContent, $matches, PREG_OFFSET_CAPTURE, strlen(mb_substr($enumContent, 0, $offset))); // offset does not have multibyte support
        if ($matched !== 1 || array_key_exists(0, $matches) === false) {
            return null;
        }

        return mb_strlen(substr($enumContent, 0, $matches[0][1])); // PREG_OFFSET_CAPTURE returns the number of bytes, and doesn't have multibyte support
    }
}
