<?php

use App\Http\Controllers\DashboardAboutController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardMerkController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LandingpageController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware('auth')->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index');
        Route::get('/about', 'about');
        Route::get('/contac', 'contac');
    });

    Route::middleware('admin')->group(function () {
        // Route User
        Route::resource('/dashboard/user', DashboardUserController::class);
        // End Route User

        // Route Dashboard About
        Route::resource(
            '/dashboard/dashboardAbout',
            DashboardAboutController::class
        )
            // ->except(['store', 'show', 'edit', 'destroy', 'create'])
            ->only(['index', 'update']);

        // Route Product Category
        route::resource(
            '/dashboard/product/category',
            DashboardCategoryController::class
        );
        // End Route Product Category

        Route::resource(
            '/dashboard/product/merk',
            DashboardMerkController::class
        );
        Route::resource(
            '/dashboard/product',
            DashboardProductController::class
        );

        Route::get('/dashboard/products/checkSlug', [
            DashboardProductController::class,
            'checkSlug',
        ]);
    });

    Route::post('/logout', [LoginController::class, 'logout']);
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
});

Route::get('/', [LandingpageController::class, 'index']);
