<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataTarget;

use PrinsFrank\Standards\Dev\EnumNotFoundException;

class EnumFile
{
    private string $path;

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

    /**
     * @throws EnumNotFoundException
     */
    public function getContent(): string
    {
        $content = file_get_contents($this->path);
        if ($content === false) {
            throw new EnumNotFoundException();
        }

        return $content;
    }

    public function putContent(string $content): self
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
        $startEnum      = strpos($enumContent, '{');
        $firstMethodPos = strpos($enumContent, ' public ');
        $endEnumPos     = strrpos($enumContent, '}');
        $newEnumContent = mb_substr($enumContent, 0, $startEnum + 1) . PHP_EOL;
        foreach ($this->cases as $case) {
            $newEnumContent .= '    ' . ((string) $case) . PHP_EOL;
        }
        $newEnumContent .= mb_substr($enumContent, $firstMethodPos !== false ? ($firstMethodPos - 5) : ($endEnumPos - 1));

        return $this->putContent($newEnumContent);
    }
}
