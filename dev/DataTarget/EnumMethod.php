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
        public readonly ?string $default,
    ) {
    }

    public function addMapping(string $from, string $to): void
    {
        $this->mapping[$from][] = $to;
    }

    public function __toString(): string
    {
        $mappingString = '';
        foreach ($this->mapping as $key => $values) {
            if (count($values) <= 1) {
                $mappingString .= $key . ' => [' . implode(',', $values) . '],' . PHP_EOL;

                continue;
            }

            $mappingString .= $key . ' => [' . PHP_EOL . implode(',' . PHP_EOL, $values) . PHP_EOL . '],' . PHP_EOL;
        }

        if ($this->default !== null) {
            $mappingString .= 'default => ' . $this->default;
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
