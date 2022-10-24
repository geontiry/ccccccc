<?php

namespace App\Http\Controllers\Panel\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company\Directorate;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function menu(Request $request)
    {
        $sites = Directorate::query()
            ->select(['id', 'name', 'code', 'route'])
            ->with([
                'departments' => fn ($q) => $q->select(['id', 'directorate_id', 'name', 'route']),
                'departments.offices' => fn ($q) => $q->select(['department_id', 'name', 'route'])
            ])
            ->get();

        return response()->json($sites);
    }
}
