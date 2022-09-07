<?php

use App\Http\Controllers\DashboardAboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
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

Route::controller(DashboardController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/dashboard/about', 'about');
    Route::get('/dashboard/contac', 'contac');
});

Route::resource('/dashboard/dashboardabout', DashboardAboutController::class);

Route::get('/login', [LoginController::class, 'index']);
