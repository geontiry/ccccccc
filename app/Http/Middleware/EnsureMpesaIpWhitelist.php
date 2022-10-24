<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EnsureMpesaIpWhitelist
{
    //protected $restrictedIp = ['192.168.0.1', '202.173.125.72', '192.168.0.3', '202.173.125.71'];
    
    public function handle(Request $request, Closure $next)
    {
        $ipAddresses = explode(';', config('services.mpesa.ip_whitelist'));

        // if (in_array($request->ip(), $this->restrictedIp)) {
        //     return response()->json(['message' => "You are not allowed to access this site."]);
        // }

        if (! in_array($request->ip(), $ipAddresses)) {

            abort(403, "You are restricted to access the site.");

            Log::error('IP address is not whitelisted', ['ip address', $request->ip()]);
    
            return redirect('home');
         }

        return $next($request);
    }
}
