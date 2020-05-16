# Text to Speech Package for Laravel
[![StyleCI](https://github.styleci.io/repos/264186668/shield?branch=master)](https://github.styleci.io/repos/264186668)
<!-- [![Latest Version on Packagist](https://img.shields.io/packagist/v/luigel/laravel-amazon-polly.svg?style=flat-square)](https://packagist.org/packages/luigel/laravel-amazon-polly)
[![Build Status](https://img.shields.io/travis/luigel/laravel-amazon-polly/master.svg?style=flat-square)](https://travis-ci.org/luigel/laravel-amazon-polly)
[![Quality Score](https://img.shields.io/scrutinizer/g/luigel/laravel-amazon-polly.svg?style=flat-square)](https://scrutinizer-ci.com/g/luigel/laravel-amazon-polly)
[![Total Downloads](https://img.shields.io/packagist/dt/luigel/laravel-amazon-polly.svg?style=flat-square)](https://packagist.org/packages/luigel/laravel-amazon-polly) -->

This is a text to speech package for Laravel. You can use Amazon Polly to convert a text to speech easily.

## Installation

You can install the package via composer:

```bash
composer require luigel/laravel-text-to-speech
```

## Usage

``` php
use Luigel\TextToSpeech\Facades\TextToSpeech;
// You can use disk() that are supported in Laravel Filesystem
TextToSpeech::disk('local')
    ->saveTo($path)
    ->convert($text);
```
``` php
// You can also use source() in order to choose the source of the text to be converted
TextToSpeech::saveTo($path)
    ->source('path')
    ->convert($path);
```
``` php
// This will save the output in the `storage/TTS` directory
TextToSpeech::convert($text);
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email rigel20.kent@gmail.com instead of using the issue tracker.

## Credits

- [Rigel Kent Carbonel](https://github.com/luigel)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

Made with ❤️ by Rigel Kent Carbonel