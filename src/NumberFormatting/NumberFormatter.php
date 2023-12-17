<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\NumberFormatting;

use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\CountryAlpha3;
use PrinsFrank\Standards\Country\CountryName;
use PrinsFrank\Standards\Country\CountryNumeric;
use PrinsFrank\Standards\DecimalSeparator\DecimalSeparator;
use PrinsFrank\Standards\DigitGroupingSystem\DigitGroupingSystem;
use PrinsFrank\Standards\Language\LanguageAlpha3Bibliographic;
use PrinsFrank\Standards\Language\LanguageAlpha3Terminology;

class NumberFormatter
{
    /** If $decimals is set to/left at null, the full precision of the number will be included in the formatted number */
    public static function formatNumber(
        float $number,
        CountryAlpha2|CountryAlpha3|CountryNumeric|CountryName $country,
        LanguageAlpha3Terminology|LanguageAlpha3Bibliographic|null $language = null,
        int|null $decimals = null,
    ): string {
        if ($country->getDigitGroupingSystem() === DigitGroupingSystem::Thousand_Then_Hundreds) {
            $decimalSeparatorPos = strstr(rtrim(number_format($number, (int)(PHP_FLOAT_DIG - log10($number)), DecimalSeparator::Dot->value), '0'), DecimalSeparator::Dot->value);
            $decimalString       = $decimalSeparatorPos === false ? '' : substr($decimalSeparatorPos, 1);

            return preg_replace('/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/', '$1,', (string) (int) $number)
                . ($decimalSeparatorPos === false || $decimalString === '' ? '' : $country->getDecimalSeparator($language)->value)
                . substr($decimalString, 0, $decimals);
        }

        return number_format(
            $number,
            $decimals ?? self::getPrecision($number),
            $country->getDecimalSeparator($language)->value,
            $country->getDigitGroupingIndicator($language)->value
        );
    }

    public static function getPrecision(float $number): int
    {
        $decimalSeparatorPos = strstr(rtrim(number_format($number, (int)(PHP_FLOAT_DIG - log10($number)), DecimalSeparator::Dot->value), '0'), DecimalSeparator::Dot->value);
        if ($decimalSeparatorPos === false) {
            return 0;
        }

        return strlen(substr($decimalSeparatorPos, 1));
    }
}
