<?php namespace Woocommerce\Woocommerceapi;

use Config;

class Woocommerceapi {

    public static function init() {
        $wc_api = new WoocommerceClient(Config::get('woocommerceapi::wooConfig.consumer_key'), Config::get('woocommerceapi::wooConfig.consumer_secret'), 
            Config::get('woocommerceapi::wooConfig.store_url'), $is_ssl = Config::get('woocommerceapi::wooConfig.ssl'));
        return $wc_api;
    }
}