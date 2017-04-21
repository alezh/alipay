<?php

namespace Alezh\Alipay;

use Illuminate\Support\ServiceProvider;

class AopClientProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/alipay.php' => config_path('alipay.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $config = config('alipay');
        $this->app->singleton("aopclient", function () use ($config) {
            return new AopClient($config);
        });
    }
}
