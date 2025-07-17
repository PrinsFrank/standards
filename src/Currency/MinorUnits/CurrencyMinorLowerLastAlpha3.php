<?php declare(strict_types=1);

namespace PrinsFrank\Standards\Currency\MinorUnits;

/**
 * @no-official-source
 *
 * @manually-updated
 */
enum CurrencyMinorLowerLastAlpha3: string {
    case Penny_Sterling = 'GBp';
    case US_Cent = 'USc';
    case Euro_Cent = 'EUc';

    public function toCurrencyMinorUpperXAlpha3(): CurrencyMinorUpperXAlpha3 {
        return match ($this) {
            self::Penny_Sterling => CurrencyMinorUpperXAlpha3::Penny_Sterling,
            self::US_Cent => CurrencyMinorUpperXAlpha3::US_Cent,
            self::Euro_Cent => CurrencyMinorUpperXAlpha3::Euro_Cent,
        };
    }
}
