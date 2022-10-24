<?php

use App\Models\Company\Department;
use App\Models\Company\Directorate;
use App\Models\Company\Office;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Str;

Route::get("/", function () {
    // return Inertia::render("Admin/Panel");
    return Inertia::render("Admin/Panel/views/dashboard/Dashboard");
});
Route::get("/typography", function () {
    return Inertia::render("Admin/Panel/views/typography/Typography");    
});
Route::get("/icons", function () {
    return Inertia::render("Admin/Panel/views/icons/Icons");    
});
Route::get("/cards", function () {
    return Inertia::render("Admin/Panel/views/cards/Card");    
});
Route::get("/simple-table", function () {
    return Inertia::render("Admin/Panel/views/simple-table/SimpleTable");    
});
Route::get("/form-layouts", function () {
    return Inertia::render("Admin/Panel/views/form-layouts/FormLayouts");    
});
Route::get("/pages/account-settings", function () {
    return Inertia::render("Admin/Panel/views/pages/account-settings/AccountSettings");    
});
Route::get("/pages/login", function () {
    return Inertia::render("Admin/Panel/views/pages/Login");    
});
Route::get("/pages/register", function () {
    return Inertia::render("Admin/Panel/views/pages/Register");    
});
Route::get("/error-404", function () {
    return Inertia::render("Admin/Panel/views/Error");    
});




/*-- AUTH --*/
$auths = ["login", "signup", "lock", "forgot", "reset", "verify", "tfa"];
foreach ($auths as $auth) {
    Route::get("/{$auth}", function () use ($auth) {
        $page = Str::ucfirst($auth);
        return Inertia::render("Admin/Auth/{$page}");
    })->name("{$auth}");
}

/*-- COMPANY --*/
$company = ["profile", "structure", "websites", "administrator",];
foreach ($company as $page) {
    Route::get("/company/{$page}", function () use ($page) {
        $page = Str::ucfirst($page);
        return Inertia::render("Admin/Company/{$page}", ["module" => "SGB Company {$page}"]);
    })->name("company.{$page}");
}

/*-- APPS --*/
$apps = ["email", "calender", "todo",];
foreach ($apps as $app) {
    Route::get("/apps/{$app}", function () use ($app) {
        $page = Str::ucfirst($app);
        return Inertia::render("Admin/Apps/{$page}", ["module" => "SGB {$page} App"]);
    })->name("apps.{$app}");
}

/*-- DASHBOARD --*/
Route::get("/dash", function () {
    return Inertia::render("Admin/Main/Dashboard");
})->name("dash");

/*-- DASHBOARDS --*/
Route::prefix("dash")->name("dash.")->group(function () {

    //Main
    $mains = ['Dashboard', 'Datatable'];
    foreach ($mains as $main) {
        Route::get(Str::lower($main), function () use ($main) {
            return Inertia::render("Admin/Main/{$main}");
        });
    }

    //Directorates
    $dirs = Directorate::pluck("code");
    foreach ($dirs as $dir) {
        Route::get(Str::lower($dir), function () use ($dir) {
            return Inertia::render("Admin/Dash/{$dir}");
        });

        //Departments
        $depts = Department::pluck("name");
        foreach ($depts as $dept) {
            Route::get(Str::lower($dir) . '/' . Str::lower($dept), function () use ($dir, $dept) {
                return Inertia::render("Admin/Dash/{$dir}/{$dept}");
            });

            //Offices
            $offices = Office::pluck("name");
            foreach ($offices as $office) {
                Route::get(Str::lower($dir) . '/' . Str::lower($dept). '/' . Str::lower($office), function () use ($dir, $dept, $office) {
                    return Inertia::render("Admin/Dash/{$dir}/{$dept}/{$office}");
                });
            }
        }
    }
});

/*-- ACCOUNT --*/
Route::prefix("account")->name("account.")->group(function () {
});
//    Route::prefix("dse")->name("dse.")->group(__DIR__ . "/admin/dept_synvast_engineering.php");
// Route::get("/ordering", function () {
//     return Inertia::render("Admin/DSM/Ordering/Page", ["module" => "SGB Ordering Management"]);
// })->name("ordering");