<?php namespace Woocommerce\Woocommerceapi;

use Illuminate\Support\ServiceProvider;

class WoocommerceapiServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('woocommerce/woocommerceapi');

        //include __DIR__ . '/../../routes.php';
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */

	public function register()
	{
	  $this->app['woocommerceapi'] = $this->app->share(function($app)
	  {
	    return new Woocommerceapi;
	  });

	$this->app->booting(function()
	{
	  $loader = \Illuminate\Foundation\AliasLoader::getInstance();
	  $loader->alias('WoocommerceAPI', 'Woocommerce\Woocommerceapi\Facades\Woocommerceapi');
	});	  
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
