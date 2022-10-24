<?php

use App\Http\Controllers\Adm\Company\CompanyController;
use App\Http\Controllers\Adm\Company\DepartmentController;
use App\Http\Controllers\Adm\Company\DirectorateController;
use App\Http\Controllers\Adm\Company\OfficeController;
use Illuminate\Support\Facades\Route;

Route::resources([
    'companies' => CompanyController::class,
    'directorates' => DirectorateController::class,
    'departments' => DepartmentController::class,
    'offices' => OfficeController::class,
]);
