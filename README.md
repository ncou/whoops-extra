# Whoops extra

[![Latest Version](https://img.shields.io/github/release/sagikazarmark/whoops-extra.svg?style=flat-square)](https://github.com/sagikazarmark/whoops-extra/releases)
[![Build Status](https://img.shields.io/travis/sagikazarmark/whoops-extra.svg?style=flat-square)](https://travis-ci.org/sagikazarmark/whoops-extra)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/sagikazarmark/whoops-extra.svg?style=flat-square)](https://scrutinizer-ci.com/g/sagikazarmark/whoops-extra)
[![Quality Score](https://img.shields.io/scrutinizer/g/sagikazarmark/whoops-extra.svg?style=flat-square)](https://scrutinizer-ci.com/g/sagikazarmark/whoops-extra)
[![Total Downloads](https://img.shields.io/packagist/dt/skm/whoops-extra.svg?style=flat-square)](https://packagist.org/packages/skm/whoops-extra)

**Useful handlers (Airbrake, PSR-3, etc) for the popular error handler [filp/whoops](http://filp.github.io/whoops/).**


## Install

Via Composer

``` bash
$ composer require skm/whoops-extra
```


## Usage

### Airbrake handler

This handler awaits an `Airbrake\Notifier` instance.
Please see the [official documentation](https://github.com/airbrake/phpbrake) to learn about it's configuration.


### PSR-3 Log handler

This handler logs the exception message (together with the trace). If it receives an `\ErrorException`,
the log level is automatically guessed from the severity of the error, otherwise it is `critical`.


### Production handler

This handler is useful if you want to block the exception from reaching eg. the Pretty Page handler in production.
Place it before the handlers you don't want Whoops to reach.


## Testing

``` bash
$ composer test
```


## Security

If you discover any security related issues, please contact us at [mark.sagikazar@gmail.com](mailto:mark.sagikazar@gmail.com).


## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
