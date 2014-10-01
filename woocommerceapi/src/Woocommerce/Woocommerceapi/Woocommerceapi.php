<?php namespace Woocommerce\Woocommerceapi;
  
use WC_API_Client;

class Woocommerceapi {
 
  /**
   * Get the registered name of the component.
   *
   * @return string
   */

  public static function greeting(){
    return "What up dawg";
  } 

  public static function return_client(){

    $consumer_key = 'ck_8e58340f9d4cab76d6ffa82267ef74b3'; // Add your own Consumer Key here
    $consumer_secret = 'cs_49c03fc4f70c828572d7b959218baded'; // Add your own Consumer Secret here
    $store_url = 'http://hotel.dev.cittando.net/'; // Add the home URL to the store you want to connect to here

    // Initialize the class
    $wc_api = WC_API_Client( $consumer_key, $consumer_secret, $store_url );
    return $wc_api;
  } 
}


