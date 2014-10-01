<?php namespace Woocommerce\Woocommerceapi\Facades;
 
use Illuminate\Support\Facades\Facade;
 
class Woocommerceapi extends Facade {
 
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { 
  	return 'woocommerceapi'; 
  }
 
}
