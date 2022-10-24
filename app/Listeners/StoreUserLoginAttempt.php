<?php

namespace App\Listeners;

use App\Events\LoginFailure;
use App\Models\LoginAttempt;
use Carbon\Carbon;

class StoreUserLoginAttempt
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

    public function handle(LoginFailure $event)
    {
        $current_timestamp = Carbon::now()->toDateTimeString();

        $saveAttempt = LoginAttempt::insert(
            [
                'user_id' => $event->user->id,
                'method' => $event->method,
                'login_at' => $current_timestamp,
            ]
        );
        return $saveAttempt;
    }
}
