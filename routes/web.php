<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AntrianPoliController;
use App\Http\Controllers\PrintController;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\LoginModal;

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

// User
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/print', [PrintController::class, 'index']);

Route::get('/logout', [LoginModal::class, 'logout'])->name('logout');

// Admin
Route::prefix('/admin')->group(__DIR__.'/adminRoutes.php');

// Routes::put('/antrian/{id}', [AntrianPoliController::class, 'updateStatus'])->name('updateStatus');