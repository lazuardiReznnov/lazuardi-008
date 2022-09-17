<?php

use App\Http\Controllers\DashboardAboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\LoginController;
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

Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->middleware('auth');
    Route::get('/about', 'about')->middleware('auth');
    Route::get('/contac', 'contac')->middleware('auth');
});

Route::resource(
    '/dashboard/about',
    DashboardAboutController::class
)->middleware('auth');

Route::resource('/dashboard/user', DashboardUserController::class)->middleware(
    'auth'
);

// Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/', [LoginController::class, 'index'])
    ->name('login')
    ->middleware('guest');
