<?php

use App\Http\Controllers\Backend\Admin\AboutController as AdminAboutController;
use App\Http\Controllers\Backend\Admin\AdminController;
use App\Http\Controllers\Backend\Superadmin\AboutController;
use App\Http\Controllers\Backend\Superadmin\SuperAdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.homepage');
});

Route::get('/invital', function () {
    return view('frontend.invital');
});

Route::middleware('auth', 'role:superadmin')->group(function () {
    Route::get('/superadmin/dashboard', [SuperAdminController::class, 'dashboard']);    
    Route::get('/superadmin/about', [AboutController::class, 'about']);    
});

Route::middleware('auth', 'role:admin')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/admin/about', [AdminAboutController::class, 'about']);    
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
