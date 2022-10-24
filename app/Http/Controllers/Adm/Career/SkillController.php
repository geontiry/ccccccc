<?php

namespace App\Http\Controllers\Adm\Career;

use App\Http\Controllers\Controller;
use App\Http\Requests\Career\SkillRequest;
use App\Models\Career\Skill;

class SkillController extends Controller
{
    public function index()
    {
        return response()->json(Skill::all());
    }

    public function store(SkillRequest $request)
    {
        $result = Skill::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Skill $Skill)
    {
        return response()->json($Skill);
    }

    public function update(SkillRequest $request, Skill $Skill)
    {
        $Skill->update($request->validated());
        return response()->json($Skill->id);
    }

    public function destroy(Skill $Skill)
    {
        $Skill->delete();
        return response()->json($Skill->id);
    }
}
