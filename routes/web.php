<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InvestigacionController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    /**
     * @routeNamespace("App\Http\Controllers\DashboardController")
     * @routePrefix("dashboard")
     */
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    /**
     * @routeNamespace("App\Http\Controllers\InvestigacionController")
     * @routePrefix("investigacion")
     */
    Route::prefix('investigacion')->controller(InvestigacionController::class)->name('investigacion.')->group(function () {
        Route::get('/', 'listar_investigaciones')->name('listar_investigaciones');
    });

});
