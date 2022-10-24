<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\MPesaService;
use App\Services\MPesaLiveService;

class PaymentServiceProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        /*MPesa Payment*/
        if (app()->environment('local')) {
            $this->app->singleton(MPesaService::class, function ($app) {
                return new MPesaService(
                    config('services.mpesa.env'),
                    config('services.mpesa.consumer_secret'),
                    config('services.mpesa.consumer_key'),
                    config('services.mpesa.business_till'),
                    config('services.mpesa.business_paybill'),
                );
            });
        } else {
            $this->app->bind(‘MPesaService::class, MPesaLiveService::class);
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
