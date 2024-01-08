# Upgrading from 2.x to 3.x

## Removal of LanguageAlpha3Common; merged into LanguageAlpha3Bibliographic and LanguageAlpha3Terminology

LanguageAlpha3Common contained all the cases that were present in both LanguageAlpha3Bibliographic and LanguageAlpha3Terminology. That resulted in complicated type hints. For the sake of simplicity these have now been merged. All the cases that were present in the LanguageAlpha3Common enum are now also present in the LanguageAlpha3Bibliographic and LanguageAlpha3Terminology enums, and the LanguageAlpha3Common class has been removed.

This change also results in the return types of the methods on language classes 'toLanguageAlpha3Terminology' changing from an intersection type with the common class to just an instance of LanguageAlpha3Terminology or null and the 'toLanguageAlpha3Bibliographic' changing from an intersection type with the common class to just an instance of LanguageAlpha3Bibliographic or null.

To process this change, simply remove all references to the following class:
```diff
- LanguageAlpha3Common
```

## ScriptCode and ScriptNumber naming inverted

In the previous release 2.5.0, the naming for scriptCode and ScriptNumber were swapped. In this release the naming has been fixed. If you used any of these classes already, please swap them in your code as well:

```diff
- ScriptCode
+ ScriptName
```

```diff
- ScriptName
+ ScriptCode
```

## Typo fixed in CountryCallingCode enum case

A typo in the name of Global Mobile Satellite System has been fixed. If you were using the `Global_Mobile_Satelite_System_shared_code` case of CountryCallingCode as a hardcoded value in your codebase, you should change it: (Note the extra letter 'l')
```diff
- CountryCallingCode::Global_Mobile_Satelite_System_shared_code;
+ CountryCallingCode::Global_Mobile_Satellite_System_shared_code;
```

## BackedEnum and UnitEnum are now marked internal

These classes should not be used outside of this package, as the method signature might change between minor versions. As such, these classes are now marked internal. If you use the classes in your code you can continue to do so at your own risk, or you might want to remove their usages.


# Ugrading from 1.x to 2.x

As this package is getting adopted and more people start using it, I got some valid feedback on the readability of the standards in codebases.
- If you want to use a country code in code, you need to navigate the namespaces or know the ISO code of the spec for the country codes
- If a country has a long formal name, using the enum name may span an entire line of code decreasing readability.

## Enum renames for readability

Both of the above issues have been solved by renaming the different specifications for readability. If you are currently using any of these classes below, you can find/replace the name in the left one with the one on the right;

| Old ClassName                  | New ClassName               |
|--------------------------------|-----------------------------|
| ISO3166_1_Alpha_2              | CountryAlpha2               |
| ISO3166_1_Alpha_3              | CountryAlpha3               |
| ISO3166_1_Name                 | CountryName                 |
| ISO3166_1_Numeric              | CountryNumeric              |
| ITU_T_E_164                    | CountryCallingCode          |
| ISO4217_Alpha_3                | CurrencyAlpha3              |
| ISO4217_Name                   | CurrencyName                |
| ISO4217_Numeric                | CurrencyNumeric             |
| ISO639_1_Alpha_2               | LanguageAlpha2              |
| ISO639_2_Alpha_3_Bibliographic | LanguageAlpha3Bibliographic |
| ISO639_2_Alpha_3_Common        | LanguageAlpha3Common        |
| ISO639_2_Alpha_3_Terminology   | LanguageAlpha3Terminology   |
| ISO639_Name                    | LanguageName                |

## Renaming of some very long Country enum cases

Some enum cases were unnecessarily using the full country name as their name, which resulted in them taking up a full line of code. These have been renamed. If you were using any explicit names in your codebase, you should change them from their old value to the new values on the left;

| Old name                                                 | New name                                |
|----------------------------------------------------------|-----------------------------------------|
| Bahamas_the                                              | Bahamas                                 |
| Bolivia_Plurinational_State_of                           | Bolivia                                 |
| British_Indian_Ocean_Territory_the                       | British_Indian_Ocean_Territory          |
| Cayman_Islands_the                                       | Cayman_Islands                          |
| Central_African_Republic_the                             | Central_African_Republic                |
| Cocos_Keeling_Islands_the                                | Cocos_Islands                           |
| Comoros_the                                              | Comoros                                 |
| Congo_the                                                | Congo                                   |
| Congo_the_Democratic_Republic_of_the                     | Congo_Democratic_Republic               |
| Cook_Islands_the                                         | Cook_Islands                            |
| Dominican_Republic_the                                   | Dominican_Republic                      |
| Falkland_Islands_the_Malvinas                            | Falkland_Islands                        |
| Faroe_Islands_the                                        | Faroe_Islands                           |
| French_Southern_Territories_the                          | French_Southern_Territories             |
| Gambia_the                                               | Gambia                                  |
| Holy_See_the                                             | Holy_See                                |
| Iran_Islamic_Republic_of                                 | Iran                                    |
| Korea_the_Democratic_People_s_Republic_of                | Korea_Democratic_Peoples_Republic       |
| Korea_the_Republic_of                                    | Korea_Republic                          |
| Lao_People_s_Democratic_Republic_the                     | Lao_Peoples_Democratic_Republic         |
| Marshall_Islands_the                                     | Marshall_Islands                        |
| Micronesia_Federated_States_of                           | Micronesia                              |
| Moldova_the_Republic_of                                  | Moldova                                 |
| Netherlands_the                                          | Netherlands                             |
| Niger_the                                                | Niger                                   |
| Northern_Mariana_Islands_the                             | Northern_Mariana_Islands                |
| Palestine_State_of                                       | Palestine                               |
| Philippines_the                                          | Philippines                             |
| Russian_Federation_the                                   | Russian_Federation                      |
| Saint_Helena_Ascension_and_Tristan_da_Cunha              | Saint_Helena_Ascension_Tristan_da_Cunha |
| South_Georgia_and_the_South_Sandwich_Islands             | South_Georgia_South_Sandwich_Islands    |
| Sudan_the                                                | Sudan                                   |
| Svalbard_and_Jan_Mayen                                   | Svalbard_Jan_Mayen                      |
| Syrian_Arab_Republic_the                                 | Syrian_Arab_Republic                    |
| Tanzania_the_United_Republic_of                          | Tanzania                                |
| Turks_and_Caicos_Islands_the                             | Turks_and_Caicos_Islands                |
| United_Arab_Emirates_the                                 | United_Arab_Emirates                    |
| United_Kingdom_of_Great_Britain_and_Northern_Ireland_the | United_Kingdom                          |
| United_States_Minor_Outlying_Islands_the                 | United_States_Outlying_Islands          |
| United_States_of_America_the                             | United_States_of_America                |
| Venezuela_Bolivarian_Republic_of                         | Venezuela                               |

## Merging of Country and CountryShort enums

As the Country enum has now been optimized for readability, the CountryShort enums have been removed. If you were using these from release 1.6, you can simply find/replace the '/CountryShort/' namespace usages with '/Country/'

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
