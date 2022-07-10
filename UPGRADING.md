# Upgrading from 0.x to 1.x

As this package reaches maturity and a first stable version is released, some breaking changes were introduced. As this package is now stable, the amount of breaking changes will be very low in the future.

## ISO4217_Alpha3 class rename to ISO4217_Alpha_3

To make classnames consistent, ```ISO4217_Alpha3``` got renamed to ```ISO4217_Alpha_3```. If you are already using this class, a simple find & replace on the old and new classnames should get you up and running again.

## toISO4217_Alpha3 method rename on ISO4217_Numeric class

In keeping everything consistent, as the ISO4217_Alpha_3 class got its new name, so has this method. The method ```toISO4217_Alpha3``` has now been renamed to ```toISO4217_Alpha_3``` for enum class ```ISO4217_Numeric```. Again, a simple find and replace for the old and new method should get you up and running again.

## Internal Enum class renamed to BackedEnum

The class ```Enum``` is mostly intended for internal use, but you might have used it to implement your own logic. If so, it has been renamed to ```BackedEnum```.

## Added missing Quechua language

You might have noticed the Quechua language was not present, even though it should have been. It is represented by 'qu' or 'que'.

## Official country names in ISO3166_1_Alpha_2, ISO3166_1_Alpha_3 and ISO3166_1_Numeric

For about a quarter of the keys in the ```ISO3166_1_Alpha_2```, ```ISO3166_1_Alpha_3``` and ```ISO3166_1_Numeric```, a shortened version of the country name was used as an unofficial source for this standard was used. This issue has now been corrected. If you use references to keys in these enums, please check they still exist. If you only use values you don't have to do anything, as the values are still the same.

If you do have references to keys on these enums in your codebase, you could trust static analysis tools like PHPStan to make sure all the references are still correct, or you could walk through your codebase manually by searching for these three classes and using your IDE to see if the references are still correct. You can also rely on your IDE to find the new name of any renamed keys, as in all cases the new keys start with the old ones.

## ISO_4217 currencies now follow official naming schemes

Previously, the currencies were preceded by the country name they were used in, but that was not always correct. Now, if a currency with the same name is used in multiple countries the name still references the country of use, otherwise the country name is omitted. This is the way the official specification specifies currencies, so we are now following spec.

If you do have references to keys on these enums in your codebase, you could trust static analysis tools like PHPStan to make sure all the references are still correct, or you could walk through your codebase manually by searching for these three classes and using your IDE to see if the references are still correct. You can also rely on your IDE to find the new name of any renamed keys, as in most cases the new keys contain the last section of the old ones.
