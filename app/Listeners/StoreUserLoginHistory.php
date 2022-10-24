<?php

namespace App\Listeners;

use App\Events\LoginSuccess;
use App\Models\LoginHistory;
use Carbon\Carbon;

class StoreUserLoginHistory
{
    public function __construct()
    {
        //
    }

    public function handle(LoginSuccess $event)
    {
        $current_timestamp = Carbon::now()->toDateTimeString();

        $saveHistory = LoginHistory::insert(
            [
                'user_id' => $event->user->id,
                'method' => $event->method,
                'login_at' => $current_timestamp,
            ]
        );
        return $saveHistory;
    }
}
