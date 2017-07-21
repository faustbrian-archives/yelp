# Yelp PHP Client

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/yelp-php-client
```

## Usage

``` php
use BrianFaust\Config;

$client = new BrianFaust\Yelp\Client();
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

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
