<?php

namespace App\Providers;

use App\PostcardSendingService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton('Postcard' , function ($app){
            return new PostcardSendingService('bangladesh','110','20');
        });
    }
}
