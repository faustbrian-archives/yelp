# Yelp PHP Client

[![Build Status](https://img.shields.io/travis/plients/Yelp-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/plients/Yelp-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/plients/yelp.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/plients/Yelp-PHP-Client.svg?style=flat-square)](https://github.com/plients/Yelp-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/plients/Yelp-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/plients/Yelp-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require plients/yelp
```

## Usage

``` php
use Plients\Config;

$client = new Plients\Yelp\Client();
$client->setConfig(new Config([
    'consumerKey' => 'CONSUMER_KEY',
    'consumerSecret' => 'CONSUMER_SECRET',
    'token' => 'TOKEN',
    'tokenSecret' => 'TOKEN_SECRET',
]));

$response = $client->api('Search')->search([
    'term' => 'Sushi',
    'location' => 'Chicago, IL'
]);

$response = $client->api('Search')->search([
    'phone' => '867-5309',
    'location' => 'Chicago, IL'
]);

$response = $client->api('Search')->getBusiness('union-chicago-3');

$response = $client->api('Search')->getBusiness('union-chicago-3', [
    'actionlinks' => true
]);
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://basecode.sh)
