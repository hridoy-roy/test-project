<?php


use App\Http\Controllers\Admin\AuthenticatedAdminSessionController;
use App\Http\Controllers\Admin\RegisteredAdminController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::prefix('admin/')->group(function (){
    Route::middleware('guest')->group(function () {
        Route::get('register', [RegisteredAdminController::class, 'create'])
            ->name('admin.register');

        Route::post('register', [RegisteredAdminController::class, 'store']);

        Route::get('login', [AuthenticatedAdminSessionController::class, 'create'])
            ->name('admin.login');

        Route::post('login', [AuthenticatedAdminSessionController::class, 'store']);
    });

    Route::middleware('auth:admin')->group(function () {

        Route::get('/dashboard', function () {
            return Inertia::render('AdminDashboard');
        })->name('admin.dashboard');

        Route::post('logout', [AuthenticatedAdminSessionController::class, 'destroy'])
            ->name('admin.logout');
    });

});
