<?php

use App\Http\Controllers\Adm\Career\ApplicationController;
use App\Http\Controllers\Adm\Career\BenefitController;
use App\Http\Controllers\Adm\Career\CareerController;
use App\Http\Controllers\Adm\Career\DutyController;
use App\Http\Controllers\Adm\Career\InterviewController;
use App\Http\Controllers\Adm\Career\PositionController;
use App\Http\Controllers\Adm\Career\RemunerationController;
use App\Http\Controllers\Adm\Career\ResourceController;
use App\Http\Controllers\Adm\Career\RightController;
use App\Http\Controllers\Adm\Career\RoleController;
use App\Http\Controllers\Adm\Career\SkillController;
use App\Http\Controllers\Adm\Career\VacancyController;
use App\Http\Controllers\Adm\Career\WorkplanController;
use Illuminate\Support\Facades\Route;

Route::resources([
    'roles' => RoleController::class,
    'careers' => CareerController::class,
    'duties' => DutyController::class,
    'skills' => SkillController::class,
    'resources' => ResourceController::class,
    'workplans' => WorkplanController::class,
    'positions' => PositionController::class,
    'remunerations' => RemunerationController::class,
    'benefits' => BenefitController::class,
    'rights' => RightController::class,
    'vacancies' => VacancyController::class,
    'applications' => ApplicationController::class,
    'interviews' => InterviewController::class,
]);
