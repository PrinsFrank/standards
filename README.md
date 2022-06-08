# Standards

A collection of standards as PHP Enums

## Country

### ISO 3166-1 Alpha-2

```php
$valueAlpha2 = ISO3166_1_Alpha_2::from('NL');        // ISO3166_1_Alpha_2::Netherlands
$value = $valueAlpha2->value;                        // 'NLD'
$valueName = $valueAlpha2->name;                     // 'Netherlands'
$valueAlpha3 = $valueAlpha2->toISO3166_1_Alpha_3();  // ISO3166_1_Alpha_3::Netherlands
$valueNumeric = $valueAlpha2->toISO3166_1_Numeric(); // ISO3166_1_Numeric::Netherlands
```

### ISO 3166-1 Alpha-3

```php
$valueAlpha3 = ISO3166_1_Alpha_3::from('NLD');       // ISO3166_1_Alpha_3::Netherlands
$value = $valueAlpha3->value;                        // 'NLD'
$valueName = $valueAlpha3->name;                     // 'Netherlands'
$valueAlpha2 = $valueAlpha3->toISO3166_1_Alpha_2();  // ISO3166_1_Alpha_2::Netherlands
$valueNumeric = $valueAlpha3->toISO3166_1_Numeric(); // ISO3166_1_Numeric::Netherlands
```

### ISO 3166-1 Numeric

```php
$valueNumeric = ISO3166_1_Numeric::from('528');       // ISO3166_1_Numeric::Netherlands
$valueNumeric = ISO3166_1_Numeric::fromInt(528);      // ISO3166_1_Numeric::Netherlands
$value = $valueNumeric->value;                        // 'NLD'
$valueName = $valueNumeric->name;                     // 'Netherlands'
$valueAlpha2 = $valueNumeric->toISO3166_1_Alpha_2();  // ISO3166_1_Alpha_2::Netherlands
$valueAlpha3 = $valueNumeric->toISO3166_1_Alpha_3();  // ISO3166_1_Alpha_3::Netherlands
```

## Currency

### ISO 4217 Alpha-3

```php
$valueAlpha3 = ISO4217_Alpha3::from('EUR');       // ISO4217_Alpha3::Euro
$value = $valueAlpha3->value;                     // 'EUR'
$valueName = $valueAlpha3->name;                  // 'Euro'
$valueAlpha2 = $valueAlpha3->toISO4217_Numeric(); // ISO4217_Numeric::Euro
```

### ISO 4217 Numeric

```php
$valueNumeric = ISO4217_Numeric::from('978');        // ISO4217_Numeric::Euro
$valueNumeric = ISO4217_Numeric::fromInt(978);       // ISO4217_Numeric::Euro
$value = $valueNumeric->value;                       // '978'
$valueName = $valueNumeric->name;                    // 'Euro'
$valueAlpha2 = $valueNumeric->toISO4217_Alpha3();    // ISO4217_Alpha3::Euro
```

## Language

### ISO 639-1

```php
```

### ISO 639-2 (Common, Bibliographic and Terminology)

```php
```
