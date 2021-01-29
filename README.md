# Laravel Stock

[![Packagist][ico-packagist]][link-packagist]
[![Downloads][ico-downloads]][link-packagist]
[![Build][ico-build]][link-build]
[![Code Coverage][ico-code-coverage]][link-code-coverage]
[![Software License][ico-license]](LICENSE.md)
[![Contributor Covenant][ico-code-of-conduct]](CODE_OF_CONDUCT.md)

_Laravel Stock service._

## Requirement

- [Laravel](https://laravel.com)

## Install

Require this package with composer via command:

```shell
composer require yoelpc4/laravel-stock
```

## Available Service Providers

Available stock service providers:

- [Yahoo Finance](https://finance.yahoo.com)

## Environment Variable

If you're planning to use `Yahoo Finance` as a provider.
Then add these lines to your .env.

```dotenv
STOCK_PROVIDER=yahoo_finance

YAHOO_FINANCE_BASE_URL=https://query1.finance.yahoo.com/

YAHOO_FINANCE_VERSION=10
```

## Package Publication

Publish package configuration via command:

```shell
php artisan vendor:publish --provider="Yoelpc4\LaravelStock\StockServiceProvider" --tag=config
```

Publish package resources via command:

```shell
php artisan vendor:publish --provider="Yoelpc4\LaravelStock\StockServiceProvider" --tag=resources
```

## Summary

Get summary

```php
$symbol = 'MSFT';

try {
    $summary = \StockService::summary($symbol);
} catch (\Illuminate\Validation\ValidationException $e) {
    throw $e;
} catch (\Psr\Http\Client\ClientExceptionInterface $e) {
    throw $e;
}
```

The return value is an instance of `\Yoelpc4\LaravelStock\Contracts\Summary\SummaryInterface` object.

## Switching Provider

Switch between available providers

```php
$stockService = \StockService::provider('yahoo_finance');
```

## Caveat

This package will run validation based on respective provider rules before dispatching some requests,
therefore it will throw `\Illuminate\Validation\ValidationException` for every unmet validation rules.

## License

The Laravel Stock is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

[ico-packagist]: https://img.shields.io/packagist/v/yoelpc4/laravel-stock.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/yoelpc4/laravel-stock.svg?style=flat-square
[ico-build]: https://travis-ci.com/yoelpc4/laravel-stock.svg?branch=master&style=flat-square
[ico-code-coverage]: https://codecov.io/gh/yoelpc4/laravel-stock/branch/master/graph/badge.svg?style=flat-square
[ico-license]: https://img.shields.io/packagist/l/yoelpc4/laravel-stock.svg?style=flat-square
[ico-code-of-conduct]: https://img.shields.io/badge/Contributor%20Covenant-v2.0%20adopted-ff69b4.svg

[link-packagist]: https://packagist.org/packages/yoelpc4/laravel-stock
[link-build]: https://travis-ci.com/yoelpc4/laravel-stock
[link-code-coverage]: https://codecov.io/gh/yoelpc4/laravel-stock
