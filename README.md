# Pathsilo

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

[link-author]: https://github.com/jacqball
[link-contributors]: ../../contributors
