<?php

namespace App\Http\Controllers\Adm\Career;

use App\Http\Controllers\Controller;
use App\Http\Requests\Career\VacancyRequest;
use App\Models\Career\Vacancy;

class VacancyController extends Controller
{
    public function index()
    {
        return response()->json(Vacancy::all());
    }

    public function store(VacancyRequest $request)
    {
        $result = Vacancy::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Vacancy $Vacancy)
    {
        return response()->json($Vacancy);
    }

    public function update(VacancyRequest $request, Vacancy $Vacancy)
    {
        $Vacancy->update($request->validated());
        return response()->json($Vacancy->id);
    }

    public function destroy(Vacancy $Vacancy)
    {
        $Vacancy->delete();
        return response()->json($Vacancy->id);
    }
}
