<?php

use App\Http\Controllers\Adm\Employee\AgreementController;
use App\Http\Controllers\Adm\Employee\EmpBankingController;
use App\Http\Controllers\Adm\Employee\EmpEducationController;
use App\Http\Controllers\Adm\Employee\EmpExperienceController;
use App\Http\Controllers\Adm\Employee\EmpKinshipController;
use App\Http\Controllers\Adm\Employee\EmployeeController;
use App\Http\Controllers\Adm\Employee\EmploymentController;
use App\Http\Controllers\Adm\Employee\PortalController;
use App\Http\Controllers\Adm\Employee\PostingController;
use App\Http\Controllers\Adm\Employee\RecruitmentController;
use App\Http\Controllers\Adm\Employee\TerminationController;
use Illuminate\Support\Facades\Route;

Route::resources([
    'employees' => EmployeeController::class,
    'emp-bankings' => EmpBankingController::class,
    'emp-education' => EmpEducationController::class,
    'emp-experiences' => EmpExperienceController::class,
    'emp-kinships' => EmpKinshipController::class,
    'recruitments' => RecruitmentController::class,
    'employments' => EmploymentController::class,
    'agreements' => AgreementController::class,
    'postings' => PostingController::class,
    'terminations' => TerminationController::class,
    'portals' => PortalController::class,
]);
