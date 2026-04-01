<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| HOME
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return redirect('/login');
});

/*
|--------------------------------------------------------------------------
| DASHBOARD (SEMUA USER LOGIN)
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

/*
|--------------------------------------------------------------------------
| AUTH USER AREA
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    // PROFILE
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /*
    |--------------------------------------------------------------------------
    | USER (VIEW ONLY)
    |--------------------------------------------------------------------------
    */
    Route::middleware(['permission:view products'])->group(function () {
        Route::get('/products-view', [ProductController::class, 'userIndex']);
    });

});

/*
|--------------------------------------------------------------------------
| ADMIN PANEL (CLEAN STRUCTURE ✅)
|--------------------------------------------------------------------------
*/
Route::prefix('admin')
    ->middleware(['auth', 'role:admin'])
    ->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'admin']);

        Route::resource('products', ProductController::class);

    });

require __DIR__.'/auth.php';