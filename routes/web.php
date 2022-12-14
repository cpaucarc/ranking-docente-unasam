<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InvestigacionController;
use App\Http\Controllers\ResponsabilidadSocialController;
use App\Http\Controllers\SemestreController;
use App\Http\Controllers\UsuarioController;
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
     * @routeNamespace("App\Http\Controllers\SemestreController")
     * @routePrefix("admin")
     */
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('semestre', SemestreController::class)->only(['index', 'create', 'store', 'edit']);
        Route::resource('usuario', UsuarioController::class);
        Route::get('/role/{usuario}/{role}', [UsuarioController::class, 'destroy_role'])->name('usuario.role.destroy');
    });

    /**
     * @routeNamespace("App\Http\Controllers\ResponsabilidadSocialController")
     * @routePrefix("responsabilidad-social")
     */
    Route::prefix('responsabilidad-social')->controller(ResponsabilidadSocialController::class)->name('responsabilidad-social.')->group(function () {
        Route::get('/', 'listar_responsabilidad_social')->name('listar_responsabilidad_social');
    });

//    Route::get('/investigacion', function () {
//        $personas = \App\Models\Persona::query()->limit(20)->get();
//        return Inertia::render('Investigacion/Index', compact('personas'));
//    })->name('investigacion');

    Route::resource('investigacion', InvestigacionController::class);
});
