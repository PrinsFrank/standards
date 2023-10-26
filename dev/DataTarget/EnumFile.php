<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataTarget;

use PrinsFrank\Standards\Dev\EnumNotFoundException;

class EnumFile
{
    public readonly string $path;

    /** @var EnumCase[] */
    private array $cases = [];

    public function __construct(string $fqn)
    {
        $this->path = dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . str_replace(['PrinsFrank\\Standards\\', '\\'], ['', DIRECTORY_SEPARATOR], $fqn) . '.php';
    }

    public function setCases(EnumCase ...$enumCases): self
    {
        $this->cases = $enumCases;

        return $this;
    }

    public function addCase(EnumCase $enumCase): self
    {
        $this->cases[] = $enumCase;

        return $this;
    }

    /**
     * @throws EnumNotFoundException
     */
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
     */
    public function writeCases(): self
    {
        $enumContent    = $this->getContent();
        $startEnum      = mb_strpos($enumContent, '{');
        $firstMethodPos = mb_strpos($enumContent, ' public ');
        $endEnumPos     = mb_strrpos($enumContent, '}');
        $newEnumContent = mb_substr($enumContent, 0, $startEnum + 1) . PHP_EOL;
        $cases          = array_unique($this->cases);
        usort($cases, static function (EnumCase $a, EnumCase $b) {
            return $a->key <=> $b->key;
        });
        foreach ($cases as $case) {
            $newEnumContent .= '    ' . $case;
        }
        $newEnumContent .= mb_substr($enumContent, $firstMethodPos !== false ? ($firstMethodPos - 5) : ($endEnumPos - 1));

        return $this->putContent($newEnumContent);
    }
}
