<?php

use App\Http\Controllers\DashboardAboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LandingpageController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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
        Route::resource('/dashboard/user', DashboardUserController::class);
        Route::resource(
            '/dashboard/about',
            DashboardAboutController::class
        )->except(['store', 'show', 'edit', 'destroy', 'create']);
    });

    Route::post('/logout', [LoginController::class, 'logout']);
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
});

Route::get('/', [LandingpageController::class, 'index']);
