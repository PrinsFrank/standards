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
        $indentingCase = str_repeat(' ', 12);
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
                $mappingString .= $indentingCase . $key . ' => ' . ($oneOfItemsIsArray === true ? '[' : '') . implode(',', $values) . ($oneOfItemsIsArray === true ? ']' : '') . ',' . PHP_EOL;

                continue;
            }

            $mappingString .= $indentingCase . $key . ' => ' . ($oneOfItemsIsArray === true ? '[' : '') . PHP_EOL . $indentingCase . '    ' . implode(',' . PHP_EOL . $indentingCase . '    ', $values) . PHP_EOL . $indentingCase . ($oneOfItemsIsArray === true ? ']' : '') . ',' . PHP_EOL;
        }

        if ($this->default !== null) {
            $mappingString .= $indentingCase . 'default => ' . $this->default;
        }

        return ($this->docBlock !== null ? ($this->docBlock . PHP_EOL) : '') . <<<EOD
            public function {$this->name}(): {$this->returnType}
            {
                return match(\$this) {
        {$mappingString}
                };
            }

        EOD;
    }
}
