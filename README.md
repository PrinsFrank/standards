<picture>
    <source srcset="docs/images/banner_dark.png" media="(prefers-color-scheme: dark)">
    <img src="docs/images/banner_light.png" alt="Banner">
</picture>

# Standards

![GitHub](https://img.shields.io/github/license/prinsfrank/standards)
![PHP Version Support](https://img.shields.io/packagist/php-v/prinsfrank/standards)
[![codecov](https://codecov.io/gh/PrinsFrank/standards/branch/main/graph/badge.svg?token=9O3VB563MU)](https://codecov.io/gh/PrinsFrank/standards)

**A collection of standards as PHP Enums**

Daily updated from their sources, whether it is ISO or IANA directly, or a maintaining party like the SIX Group or the US Library of Congress.

## Setup

> **Note**
> Make sure you are running PHP 8.1 or higher to use this package

To start right away, run the following command in your composer project;

```composer require prinsfrank/standards```

Or for development only;

```composer require prinsfrank/standards --dev```

## How this package works

This package implements a bunch of specs as PHP Enums, so you can typehint them in methods. Currently, all specs are implemented as backed enums. That means that besides a name, they have also an internal 'value', either as an integer or a string.

In the Country, Currency and language specifications, there is also a relation between different enums. For example, the Alpha2 country code 'NL' is related to the Alpha3 'NLD', the numeric value '528' and the name 'Netherlands (the)'. Internally, these specs rely on the fact that the keys for these values are identical, so it is possible to convert between these.

## Upgrading

This package adheres to [semver](https://semver.org/). This means that there are no breaking changes between minor releases (for example from 1.1 to 1.2), but that breaking changes are released as a major release (for example from 1.x to 2.x). To read about upgrading from one major release to the next, please refer to the [UPGRADING.md](./UPGRADING.md) file in the root of this project. 

## Country (ISO3166)

[![Daily country spec update](https://github.com/PrinsFrank/standards/actions/workflows/update-spec-country.yml/badge.svg)](https://github.com/PrinsFrank/standards/actions/workflows/update-spec-country.yml)

All the Alpha2, Alpha3, Numeric and Name values have a corresponding enum in the other country enums. [These can be converted using their corresponding methods](/docs/country.md). 

| Key         | CountryAlpha2 | CountryAlpha3 | CountryNumeric | CountryName       |
|-------------|---------------|---------------|----------------|-------------------|
| Netherlands | NL            | NLD           | 528            | Netherlands (the) |
| Turkey      | TR            | TUR           | 792            | Türkiye           |
| ...         | ...           | ...           | ...            | ...               |

## Currency (ISO4217)

[![Daily currency spec update](https://github.com/PrinsFrank/standards/actions/workflows/update-spec-currency.yml/badge.svg)](https://github.com/PrinsFrank/standards/actions/workflows/update-spec-currency.yml)

All the Alpha3, Numeric and Name values have a corresponding enum in the other currency enums. [These can be converted using their corresponding methods](/docs/currency.md).

| Key          | CurrencyAlpha3 | CurrencyNumeric | CurrencyName |
|--------------|----------------|-----------------|--------------|
| Euro         | EUR            | 978             | Euro         |
| Turkish_Lira | TRY            | 949             | Turkish Lira |
| ...          | ...            | ...             | ...          |

## Language (ISO639)

[![Daily language spec update](https://github.com/PrinsFrank/standards/actions/workflows/update-spec-language.yml/badge.svg)](https://github.com/PrinsFrank/standards/actions/workflows/update-spec-language.yml)

The language specification is a bit more complex, as there are 20 alpha3 codes that have both a Bibliographic and a Terminology code. All the other ones have a common one. So if you decide you want the alpha3 representation of an alpha2 code, you can convert it to either Terminology or Bibliographic, where if it is not available you will get an instance of the common enum. [More documentation can be found here](/docs/language.md).

| Key           | LanguageAlpha2 | LanguageAlpha3Bibliographic | LanguageAlpha3Common | LanguageAlpha3Terminology | LanguageName   |
|---------------|----------------|-----------------------------|----------------------|---------------------------|----------------|
| Dutch_Flemish | nl             | dut                         |                      | nld                       | Dutch; Flemish |
| Turkish       | tr             |                             | tur                  |                           | Turkish        |
| ...           | ...            | ...                         | ...                  | ...                       | ...            |

## Country Calling Codes (ITU-T E.164)

Country calling codes are quite straight forward. One Exception is that the +1 prefix is used across a lot of countries, and there is no standard for sub-numbering plans. 

| Key                        | InternationalCallPrefix |
|----------------------------|-------------------------|
| Netherlands_Kingdom_of_the | 31                      |
| Turkey                     | 90                      |

## HTTP Status Codes

[![Daily HTTP Status code spec update](https://github.com/PrinsFrank/standards/actions/workflows/update-spec-http-status-codes.yml/badge.svg)](https://github.com/PrinsFrank/standards/actions/workflows/update-spec-http-status-codes.yml)

HTTP Status codes are quite straightforward. For some code examples [you can look in the documentation](/docs/http_status_code.md).

| Key               | HttpStatusCode |
|-------------------|----------------|
| Moved_Permanently | 301            |
| Not_Found         | 404            |
| ...               | ...            |

## HTTP Methods

[![Daily HTTP method spec update](https://github.com/PrinsFrank/standards/actions/workflows/update-spec-http-methods.yml/badge.svg)](https://github.com/PrinsFrank/standards/actions/workflows/update-spec-http-methods.yml)

| Key             | Value            |
|-----------------|------------------|
| Post            | POST             |
| Put             | PUT              |
| BaselineControl | BASELINE-CONTROL |
| ...             | ...              |
