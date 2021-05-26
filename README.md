# A simple Laravel package to get the amount of followers from a LinkedIn page.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/marshmallow-packages/linkedin-followers.svg?style=flat-square)](https://packagist.org/packages/marshmallow-packages/linkedin-followers)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/marshmallow-packages/linkedin-followers/run-tests?label=tests)](https://github.com/marshmallow-packages/linkedin-followers/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/marshmallow-packages/linkedin-followers/Check%20&%20fix%20styling?label=code%20style)](https://github.com/marshmallow-packages/linkedin-followers/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/marshmallow-packages/linkedin-followers.svg?style=flat-square)](https://packagist.org/packages/marshmallow-packages/linkedin-followers)

A simple Laravel package to get the amount of followers from a LinkedIn page. You just run `LinkedinFollowers::of(13027923)->followers();` and you have the amount of followers for the provided company id.

## Installation

You can install the package via composer:

```bash
composer require marshmallow-packages/linkedin-followers
```

## Usage

```php
$followers = LinkedinFollowers::of(13027923)->followers();
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Stef van Esch](https://github.com/marshmallow-packages)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
