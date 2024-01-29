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
        public readonly ?string $docBlock = null,
    ) {
    }

    public function addMapping(string $from, string $to): void
    {
        if (array_key_exists($from, $this->mapping) && in_array($to, $this->mapping[$from], true) === true) {
            return;
        }

        $this->mapping[$from][] = $to;
    }

    public function __toString(): string
    {
        $indenting = str_repeat(' ', 8);
        $mappingString = '';
        $sortedMapping = $this->mapping;
        ksort($sortedMapping);

        $oneOfItemsIsArray = array_reduce(
            $sortedMapping,
            static function (?bool $carry, array $item) {
                return $carry === true || count($item) > 1;
            }
        );

        foreach ($sortedMapping as $key => $values) {
            sort($values);

            if (count($values) <= 1) {
                $mappingString .= $indenting . $key . ' => ' . ($oneOfItemsIsArray === true ? '[' : '') . implode(',', $values) . ($oneOfItemsIsArray === true ? ']' : '') . ',' . PHP_EOL;

                continue;
            }

            $mappingString .= $indenting . $key . ' => ' . ($oneOfItemsIsArray === true ? '[' : '') . PHP_EOL . $indenting . implode(',' . PHP_EOL . $indenting, $values) . PHP_EOL . ($oneOfItemsIsArray === true ? ']' : '') . ',' . PHP_EOL;
        }

        if ($this->default !== null) {
            $mappingString .= $indenting . 'default => ' . $this->default;
        }

        $docBlock = $this->docBlock ?? '';
        return <<<EOD
            {$docBlock}
            public function {$this->name}(): {$this->returnType}
            {
                return match(\$this) {
                    {$mappingString}
                };
            }
        EOD;
    }
}
