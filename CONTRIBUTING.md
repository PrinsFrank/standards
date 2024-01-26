# Contributing

Thanks for willing to contribute to this package!

This package follows semantic versioning. If you want to contribute new features/standards, you can open a PR to the main branch.
When updating existing keys, make sure to open a PR to the next-release branch. If the latest release is 2.x.x, the PR should be opened against the 3.x branch

## Updating specs locally

To run the spec updates locally, you need to have either chrome or firefox installed locally. Additionally, you'll need to run the following command to detect the drivers:

```bash
composer detect-drivers
```

Now you can update either all of the specs:
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
composer update-spec-scripts
composer update-spec-tld
```
