Laravel WooCommerce API
===================================
A simple Laravel service provider for making it easier to include the [WooCommerce REST API](https://github.com/dynelight/WooCommerce-REST-API-Client-Library) for PHP into your Laravel application.

## Installation
Currently it haven't publish to Packagist, add this to your composer.json

```php
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/robinkyc/laravel-woocommerce"
        }
    ],
    "require": {
        "woocommerce/woocommerceapi": "dev-master"
    },
```

## Configuration
To customize the configuration file, publish the package configuration using Artisan.
```php
php artisan config:publish woocommerce/woocommerceapi
```
Update your settings in the generated app/config/woocommerce/woocommerceapi/wooConfig.php configuration file.
```php
    'consumer_key' => 'ck_8e58340f9d4cab76d6ffa82267ef74b3',
    'consumer_secret' => 'cs_49c03fc4f70c828572d7b959218baded',
    'store_url' => 'http://store.sample.net/',
    'ssl' => false,
```
Find the providers key in your app/config/app.php and register the WooCommerce Service Provider.
```php
    'providers' => array(
        // ...
        'Woocommerce\Woocommerceapi\WoocommerceapiServiceProvider',
    )
```
Find the aliases key in your app/config/app.php and add the WooCommerce facade alias.
```php
    'aliases' => array(
        // ...
        'Woocommerceapi' => 'Woocommerce\Woocommerceapi\Facades\Woocommerceapi',
    )
```

## Usage
```php
use Woocommerceapi;
$wc_api = Woocommerceapi::init();
dd($wc_api->get_orders());
```
Refer to [WooCommerce REST API](https://github.com/dynelight/WooCommerce-REST-API-Client-Library) for more REST API