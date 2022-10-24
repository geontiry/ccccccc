<?php

namespace App\Providers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;

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
        /*Password Validation Default Rule*/
        Password::defaults(function () {
            $rule = Password::min(8)->mixedCase()->letters()->numbers()->symbols();
            return env('APP_ENV' ==! 'local') ? $rule->uncompromised() : $rule;
            //return $this->app->isProduction() ? $rule->uncompromised() : $rule;
        });

        /*API Success Response*/
        Response::macro('success', function ($data) {
            return response()->json([ 'success' => true, 'data' => $data ]);
        });

        /*API Error Response*/
        // Response::macro('error', function ($error, $status_code) {
        //     return response()->json([ 'success' => false, 'error' => $error ], $status_code);
        // });
    }
}
