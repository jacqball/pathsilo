# Pathsilo

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Generates filesystem paths. Includes name based paths and date based paths.

The intended use case is to facilitate storage and retrieval of "large" numbers of files by storing them in multiple folders. 

## Install

Via Composer

``` bash
$ composer require jacqball/pathsilo
```

## Usage

``` php
// Generate path based on key string (key can be anything such as a file name)
$ps = new Jacq\PathSilo\PathSilo();
$path = $ps->getPath('SomeTextString');

// Generate path from date string - dates are not validated, if you pass in 8 digits it will operate
$dps =  new Jacq\PathSilo\DatePathSilo();
$path = $dps->getPath('20160831');

```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email jacqball@gmail.com instead of using the issue tracker.

## Credits

- [Jacques Ball][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

 [comment]: <> [ico-version]: https://img.shields.io/packagist/v/:vendor/:package_name.svg?style=flat-square
 [comment]: <> [ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
 [comment]: <> [ico-travis]: https://img.shields.io/travis/:vendor/:package_name/master.svg?style=flat-square
 [comment]: <> [ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/:vendor/:package_name.svg?style=flat-square
 [comment]: <> [ico-code-quality]: https://img.shields.io/scrutinizer/g/:vendor/:package_name.svg?style=flat-square
 [comment]: <> [ico-downloads]: https://img.shields.io/packagist/dt/:vendor/:package_name.svg?style=flat-square

 [comment]: <> [link-packagist]: https://packagist.org/packages/:vendor/:package_name
 [comment]: <> [link-travis]: https://travis-ci.org/:vendor/:package_name
 [comment]: <> [link-scrutinizer]: https://scrutinizer-ci.com/g/:vendor/:package_name/code-structure
 [comment]: <> [link-code-quality]: https://scrutinizer-ci.com/g/:vendor/:package_name
[comment]: <> [link-downloads]: https://packagist.org/packages/:vendor/:package_name
[link-author]: https://github.com/jacqball
[link-contributors]: ../../contributors
