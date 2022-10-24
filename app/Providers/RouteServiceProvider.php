<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/dashboard';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {

            //REPOS
            $versions = [ 'v1', '1.0', '2.0' ]; // Vendors; Web/App
            foreach ($versions as $version) {
                //API
                Route::prefix('api/'.$version)
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/repo/'.$version.'.php'));
                //WEB
                Route::prefix('web/'.$version)
                ->name('web.'.$version.'.')
                ->middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/repo/'.$version.'.php'));
                //ADM
                Route::prefix('admin/')
                ->name('admin.')
                ->middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/repo/admin.php'));
            };

            //DataTables
            $adms = [
                'user', 'location', 'company', 'asset', 'payment', 'business', 'dashboard', 'career', 'employee', 'catalogue', 'supplier', 'inventory', 'pricing', 'shipment', 'sale', 'relation'
            ];

            //Domains-Pages
            $domains = [
                'panel' => [ 'admin', 'terminal', 'portal', 'selfcare', ],
                'synvast' => [ 'electrical', ],
                'genset' => [ 'developer',  ],
                'brenden' => [ 'egraphics',  ],
                'module' => [ 'careers', 'blog' ],
            ];

            foreach ($domains as $domain => $sites) {
                foreach ($sites as $site) {
                    Route::middleware('web')
                    ->name($site.'.')
                    ->domain($site.'.'.env('APP_URL'))
                    ->namespace($this->namespace)
                    ->group(base_path('routes/'.$domain.'/'.$site.'.php'));
                }
            }

            //Default
            Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });

        RateLimiter::for('web', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
