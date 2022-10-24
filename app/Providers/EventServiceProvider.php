<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\LoginSuccess;
use App\Events\LoginFailure;
use App\Events\Subscribed;
use App\Listeners\StoreUserLoginHistory;
use App\Listeners\StoreCookieCartItems;
use App\Listeners\StoreSessionCartItems;
use App\Listeners\StoreUserLoginAttempt;
use App\Listeners\SendEmailSubsciptionConfirmation;
use App\Models\ProductVariation;
use App\Observers\ProductVariationObserver;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        LoginSuccess::class => [
            StoreUserLoginHistory::class,
            StoreCookieCartItems::class,
            StoreSessionCartItems::class,
        ],
        LoginFailure::class => [
            StoreUserLoginAttempt::class,
        ],
        Subscribed::class => [
            SendEmailSubsciptionConfirmation::class,
        ],
        /*
        OrderShipped::class => [
            SendShipmentNotification::class,
        ],*/
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //ProductVariation::observe(ProductVariationObserver::class);
    }
}
