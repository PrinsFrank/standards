# Contributing

Thanks for willing to contribute to this package!

This package follows semantic versioning. If you want to contribute new features/standards, you can open a PR to the main branch. Please make sure to not update existing keys, as people could be using them in implementing projects. If a key is to be removed, simply mark it as deprecated, and it will be removed in the next major release.

## Specs and Mappings

Most specifications are implemented with Mappings. That means, that they can be retrieved using an automatic script from their source, and are indeed updated daily.

## Adding a specification

Firstly, it is important to note that only official specifications are maintained in this package. If there is standard, this is usually the case. If you're unsure, please open an issue to discuss adding the specification before you put your valuable time into adding it!

If you want to add a specification that is maintained by an official organization, please check if there is a html/xml/csv source available that can be used to update the specification. If so, start by creating the new namespace and enum file, and then add a mapping in dev/DataSource/Mapping. Add a new class that describes the source, and implement the `Mapping` interface. The url is automatically retrieved in a first request, and then you have access to the page in the `toDataSet` method. After scraping all the data you need, you can then organize that data in the `toEnumMapping` method. Don't hesitate to open a draft PR with your progress and to tag `@PrinsFrank` for help!

Sometimes organizations publish PDF documents instead of publishing the data on a web page. In that case, you can manually add the specification.

## Updating specs locally

To run the spec updates locally, you need to have either chrome or firefox installed locally. Additionally, you'll need to run the following command to detect the drivers:

```bash
composer detect-drivers
```

Now you can update either all the specs:
```bash
composer update-spec
```

Or any individual specification:
```bash
composer update-spec-country
composer update-spec-currency
composer update-spec-http-methods
composer update-spec-http-status-codes
composer update-spec-language-extensive
composer update-spec-language
composer update-spec-language-subtag
composer update-spec-php-regex-script
composer update-spec-scripts
composer update-spec-tld
```
