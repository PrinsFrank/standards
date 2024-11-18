<?php declare(strict_types=1);

namespace PrinsFrank\Standards\Name;

/**
 * @no-official-source
 *
 * @manually-updated
 */
enum NameOrder: int {
    case Eastern = 0;
    case Western = 1;

    /**
     * In case of Mononymous names, only supply $given
     * Patronymics and Matronymics should be given in $middle or $family depending on country/language.
     *
     * note: $middle is optional, if supplied/stored in two fields instead of three make sure to supply a $given and a
     * $family name, and store any additional names in the $given field
     */
    public function format(?string $given, ?string $middle, ?string $family): string {
        return implode(
            ' ',
            array_filter(
                match ($this) {
                    self::Eastern => [$family, $middle, $given],
                    self::Western => [$given, $middle, $family],
                },
                fn (string|null $value) => $value !== null
            )
        );
    }
}
