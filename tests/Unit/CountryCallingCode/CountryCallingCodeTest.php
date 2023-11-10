<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\CountryCallingCode;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\CountryAlpha3;
use PrinsFrank\Standards\Country\CountryName;
use PrinsFrank\Standards\Country\CountryNumeric;
use PrinsFrank\Standards\CountryCallingCode\CountryCallingCode;

/** @coversDefaultClass \PrinsFrank\Standards\CountryCallingCode\CountryCallingCode */
class CountryCallingCodeTest extends TestCase
{
    /**
     * @covers ::forCountry
     * @covers ::getCountriesAlpha2
     */
    public function testForCountryIsReversible(): void
    {
        foreach (CountryAlpha2::cases() as $countryAlpha2) {
            foreach (CountryCallingCode::forCountry($countryAlpha2) as $countryCallingCode) {
                static::assertContains($countryAlpha2, $countryCallingCode->getCountriesAlpha2(), $countryAlpha2->name . ' Has as calling code ' . $countryCallingCode->name . ', but that calling code doesn\'t return the country when calling the "getCountriesAlpha2" method.');
            }
        }
    }

    /**
     * @covers ::getCountriesAlpha2
     * @covers ::forCountry
     */
    public function testGetCountriesAlpha2IsReversible(): void
    {
        foreach (CountryCallingCode::cases() as $countryCallingCode) {
            foreach ($countryCallingCode->getCountriesAlpha2() as $countryAlpha2) {
                static::assertContains($countryCallingCode, $countryAlpha2->getCountryCallingCodes(), $countryCallingCode->name . ' is for a country ' . $countryAlpha2->name . ' but that country doesn\'t return this calling code when calling the "getCountryCallingCodes" method.');
            }
        }
    }

    /** @covers ::forCountry */
    public function testCanBeRetrievedForAllCountryAlpha2(): void
    {
        $missingRelations = [];
        foreach (CountryAlpha2::cases() as $countryAlpha2) {
            $countryCallingCodes = CountryCallingCode::forCountry($countryAlpha2);
            if ($countryCallingCodes === []) {
                $missingRelations[] = $countryAlpha2;
            }
        }
        static::assertEmpty($missingRelations, 'It should be possible to get one or more country calling codes for all countries, none supplied for ' . implode(', ', array_map(static fn (CountryAlpha2 $countryAlpha2) => $countryAlpha2->name, $missingRelations)));
    }

    /** @covers ::forCountry */
    public function testCanBeRetrievedForAllCountryAlpha3(): void
    {
        $missingRelations = [];
        foreach (CountryAlpha3::cases() as $countryAlpha3) {
            $countryCallingCodes = CountryCallingCode::forCountry($countryAlpha3);
            if ($countryCallingCodes === []) {
                $missingRelations[] = $countryAlpha3;
            }
        }
        static::assertEmpty($missingRelations, 'It should be possible to get one or more country calling codes for all countries, none supplied for ' . implode(', ', array_map(static fn (CountryAlpha2 $countryAlpha2) => $countryAlpha2->name, $missingRelations)));
    }

    /** @covers ::forCountry */
    public function testCanBeRetrievedForAllCountryNumeric(): void
    {
        $missingRelations = [];
        foreach (CountryNumeric::cases() as $countryNumeric) {
            $countryCallingCodes = CountryCallingCode::forCountry($countryNumeric);
            if ($countryCallingCodes === []) {
                $missingRelations[] = $countryNumeric;
            }
        }
        static::assertEmpty($missingRelations, 'It should be possible to get one or more country calling codes for all countries, none supplied for ' . implode(', ', array_map(static fn (CountryAlpha2 $countryAlpha2) => $countryAlpha2->name, $missingRelations)));
    }

    /** @covers ::forCountry */
    public function testCanBeRetrievedForAllCountryName(): void
    {
        $missingRelations = [];
        foreach (CountryName::cases() as $countryName) {
            $countryCallingCodes = CountryCallingCode::forCountry($countryName);
            if ($countryCallingCodes === []) {
                $missingRelations[] = $countryName;
            }
        }
        static::assertEmpty($missingRelations, 'It should be possible to get one or more country calling codes for all countries, none supplied for ' . implode(', ', array_map(static fn (CountryAlpha2 $countryAlpha2) => $countryAlpha2->name, $missingRelations)));
    }
}
