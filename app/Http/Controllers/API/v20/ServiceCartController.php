<?php

namespace App\Http\Controllers\API\v20;

use App\Http\Controllers\Controller;
use App\Models\Business\Business;
use Illuminate\Http\Request;

class ServiceCartController extends Controller
{
    public function company(Request $request)
    {
    }

    public function sites(Request $request)
    {
        $sites = Business::query()
            ->select(['id', 'code', 'name', 'domain', 'brand', 'description', 'logo', 'slogan'])
            ->with(['sites' => function ($q) {
                $q->select(['business_id', 'name']);
            }])
            ->get();

        return $sites;
    }
}
