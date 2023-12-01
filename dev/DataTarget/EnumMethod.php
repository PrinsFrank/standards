<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataTarget;

class EnumMethod
{
    /** @var array<int|string, list<string>> */
    private array $mapping = [];

    public function __construct(
        public readonly string $name,
        public readonly string $returnType,
    ) {
    }

    public function addMapping(string $from, string $to): void
    {
        $this->mapping[$from][] = $to;
    }

    public function __toString(): string
    {
        $mappingString = '';
        foreach ($this->mapping as $key => $value) {
            $mappingString .= $key . ' => [' . PHP_EOL . implode(',' . PHP_EOL, $value) . PHP_EOL . '],' . PHP_EOL;
        }

        return <<<EOD
            public function {$this->name}(): {$this->returnType}
            {
                return match(\$this) {
                    {$mappingString}
                };
            }
        EOD;
    }
}
