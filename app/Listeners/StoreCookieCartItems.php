<?php

namespace App\Listeners;

use App\Events\LoginSuccess;

class StoreCookieCartItems
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  LoginSuccess  $event
     * @return void
     */
    public function handle(LoginSuccess $event)
    {
        //
    }
}
