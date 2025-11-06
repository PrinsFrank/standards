<?php declare(strict_types=1);

namespace PrinsFrank\Standards\Currency\MinorUnits;

/**
 * @no-official-source
 *
 * @manually-updated
 */
enum CurrencyMinorUpperXAlpha3: string {
    case Penny_Sterling = 'GBX';
    case US_Cent = 'USX';
    case Euro_Cent = 'EUX';
    case Rand_Cent = 'ZAX';

    public function toCurrencyMinorLowerLastAlpha3(): CurrencyMinorLowerLastAlpha3 {
        return match ($this) {
            self::Penny_Sterling => CurrencyMinorLowerLastAlpha3::Penny_Sterling,
            self::US_Cent => CurrencyMinorLowerLastAlpha3::US_Cent,
            self::Euro_Cent => CurrencyMinorLowerLastAlpha3::Euro_Cent,
            self::Rand_Cent => CurrencyMinorLowerLastAlpha3::Rand_Cent,
        };
    }
}
