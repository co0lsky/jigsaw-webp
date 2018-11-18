# Jigsaw WebP

Convert JPEG and PNG images to WebP for static website generated by Jigsaw

## Install

Via Composer

``` bash
$ composer require skychin/jigsaw-webp
```

## Usage

``` php
$source = $jigsaw->getSourcePath() . '/_assets/images/';
$destination = $jigsaw->getSourcePath() . '/assets/images/';
$converter = new \SkyChin\Jigsaw\WebP\ImageConverter($jigsaw->getFilesystem());
$converter->convert($source, $destination);
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email sky4just@gmail.com instead of using the issue tracker.

## Credits

- [Sky Chin][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/skychin/jigsaw-webp.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/skychin/jigsaw-webp/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/skychin/jigsaw-webp.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/skychin/jigsaw-webp.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/skychin/jigsaw-webp.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/skychin/jigsaw-webp
[link-travis]: https://travis-ci.org/skychin/jigsaw-webp
[link-scrutinizer]: https://scrutinizer-ci.com/g/skychin/jigsaw-webp/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/skychin/jigsaw-webp
[link-downloads]: https://packagist.org/packages/skychin/jigsaw-webp
[link-author]: https://github.com/co0lsky
[link-contributors]: ../../contributors
