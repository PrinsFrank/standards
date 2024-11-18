<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataTarget;

/** @internal */
class EnumListMethod {
    /** @var list<string> */
    private array $list = [];

    public function __construct(
        public readonly string $name,
        public readonly string $returnType,
        public readonly ?string $docBlock = null,
    ) {
    }

    public function addItem(string $item): void {
        if (in_array($item, $this->list, true) === true) {
            return;
        }

        $this->list[] = $item;
    }

    public function __toString(): string {
        $indentingCase = str_repeat(' ', 12);
        $mappingString = '';
        $sortedMapping = $this->list;
        sort($sortedMapping);

        foreach ($sortedMapping as $value) {
            $mappingString .= PHP_EOL . $indentingCase . $value . ',';
        }

        return PHP_EOL . ($this->docBlock !== null ? ('    ' . $this->docBlock . PHP_EOL) : '') . <<<EOD
            public static function {$this->name}(): {$this->returnType} {
                return [{$mappingString}
                ];
            }
        EOD;
    }
}
