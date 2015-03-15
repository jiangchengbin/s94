<?php namespace S94\Debug;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class DebugServiceProvider extends ServiceProvider {

	/**
	 * Boot the service provider.
	 *
	 * @return void
	 */
	public function boot()
	{
		
		
	}

	
	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['debug'] = $this->app->share(
            function ($app) {
                return new \S94\Debug\Debug();
            }
        );
	}

}
