<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\LoginAdminController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\PasswordController;
use App\Http\Controllers\admin\PasienController;
use App\Http\Controllers\admin\PoliController;
use App\Http\Controllers\admin\AntrianPoliController;

Route::get('/', function(){
        return redirect('/admin/dashboard');
    });

// Logout Admin
Route::get('/logout', [LoginAdminController::class, 'logout'])->name('admin.logout');

// Guest Admin
Route::middleware(['guest:admin'])->group(function () {
    Route::get('/login', [LoginAdminController::class, 'index'])->name('admin.login');
    Route::post('/login', [LoginAdminController::class, 'authenticate']);
});

// Required Login Admin
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::resource('/pasien', PasienController::class);

    Route::resource('/poli', PoliController::class)->except(['show']);

    Route::resource('/antrian-poli', AntrianPoliController::class)->except(['store', 'edit', 'update', 'destroy']);

    Route::get('/password', [PasswordController::class, 'index']);
    Route::post('/password', [PasswordController::class, 'store']);
});