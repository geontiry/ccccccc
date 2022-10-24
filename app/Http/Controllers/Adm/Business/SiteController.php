<?php

namespace App\Http\Controllers\Adm\Business;

use App\Http\Controllers\Controller;
use App\Http\Requests\Business\SiteRequest;
use App\Models\Business\Site;

class SiteController extends Controller
{
    public function index()
    {
        return response()->json(Site::all());
    }

    public function store(SiteRequest $request)
    {
        $result = Site::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Site $site)
    {
        return response()->json($site);
    }

    public function update(SiteRequest $request, Site $site)
    {
        $site->update($request->validated());
        return response()->json($site->id);
    }

    public function destroy(Site $site)
    {
        $site->delete();
        return response()->json($site->id);
    }
}
