<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Currency;

/**
 * @no-official-source
 *
 * @manually-updated
 */
enum CurrencyAlpha3X: string {
    case EURX = 'EURX';
    case USX = 'USX';
    case GBX = 'GBX';
    case GBp = 'GBp';

    public function getMain(): CurrencyAlpha3 {
        return match ($this) {
            self::GBX, self::GBp => CurrencyAlpha3::Pound_Sterling,
            self::EURX => CurrencyAlpha3::Euro,
            self::USX => CurrencyAlpha3::US_Dollar,
        };
    }
}
