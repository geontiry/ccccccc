<?php

namespace App\Http\Controllers\Adm\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\Company\CompanyRequest;
use App\Models\Company\Company;

class CompanyController extends Controller
{
    public function index()
    {
        return response()->json(Company::all());
    }

    public function store(CompanyRequest $request)
    {
        $result = Company::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Company $company)
    {
        return response()->json($company);
    }

    public function update(CompanyRequest $request, Company $company)
    {
        $company->update($request->validated());
        return response()->json($company->id);
    }

    public function destroy(Company $company)
    {
        $company->delete();
        return response()->json($company->id);
    }
}
