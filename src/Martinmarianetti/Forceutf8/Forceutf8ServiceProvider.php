<?php namespace Martinmarianetti\Forceutf8;

use Illuminate\Support\ServiceProvider;

class Forceutf8ServiceProvider extends ServiceProvider
{

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
        $this->package('martinmarianetti/forceutf8');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['encoding'] = $this->app->share(function ($app) {
            return new \ForceUTF8\Encoding;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('encoding');
    }

}
