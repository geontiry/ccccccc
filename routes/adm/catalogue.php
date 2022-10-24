<?php

use App\Http\Controllers\Adm\Catalogue\BrandController;
use App\Http\Controllers\Adm\Catalogue\CatalogueController;
use App\Http\Controllers\Adm\Catalogue\CategoryController;
use App\Http\Controllers\Adm\Catalogue\ComplimentController;
use App\Http\Controllers\Adm\Catalogue\ContentController;
use App\Http\Controllers\Adm\Catalogue\FeatureController;
use App\Http\Controllers\Adm\Catalogue\ImageController;
use App\Http\Controllers\Adm\Catalogue\PackageController;
use App\Http\Controllers\Adm\Catalogue\ProductController;
use App\Http\Controllers\Adm\Catalogue\SpecController;
use App\Http\Controllers\Adm\Catalogue\VariantController;
use Illuminate\Support\Facades\Route;

Route::resources([
    'catalogues' => CatalogueController::class,
    'categories' => CategoryController::class,
    'brands' => BrandController::class,
    'products' => ProductController::class,
    'images' => ImageController::class,
    'features' => FeatureController::class,
    'variants' => VariantController::class,
    'specs' => SpecController::class,
    'packages' => PackageController::class,
    'contents' => ContentController::class,
    'compliments' => ComplimentController::class,
]);
