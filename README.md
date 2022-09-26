# Package to use SingleStore DB's match() function for full text search adding Model::match()->get() to Models

[![Latest Version on Packagist](https://img.shields.io/packagist/v/guywarner/laravel-singlestore-fulltext.svg?style=flat-square)](https://packagist.org/packages/guywarner/laravel-singlestore-fulltext)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/guywarner/laravel-singlestore-fulltext/run-tests?label=tests)](https://github.com/guywarner/laravel-singlestore-fulltext/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/guywarner/laravel-singlestore-fulltext/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/guywarner/laravel-singlestore-fulltext/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/guywarner/laravel-singlestore-fulltext.svg?style=flat-square)](https://packagist.org/packages/guywarner/laravel-singlestore-fulltext)

A simple package to add (match())[https://docs.singlestore.com/managed-service/en/reference/sql-reference/full-text-search-functions/match.html] function to Laravel models

```php
User::match(['first_name', 'last_name'], 'Guy Warner')->get()
```

## Installation

You can install the package via composer:

```bash
composer require guywarner/laravel-singlestore-fulltext
```

Add your FULLTEXT keys.

Extend the model you want to search:

```php
use Guywarner\LaravelSinglestoreFulltext\Models\SingleStoreModel;

class Mopdel extends SingleStoreModel
{
}
```

## Usage

```php
Model::match(['column1', 'column2'], 'search term')->get();
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Guy Warner](https://github.com/guywarner)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
