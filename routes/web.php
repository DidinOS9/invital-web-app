<?php

use App\Http\Controllers\Backend\Admin\AboutController as AdminAboutController;
use App\Http\Controllers\Backend\Admin\AdminController;
use App\Http\Controllers\Backend\Admin\Visitor\VisitorController;
use App\Http\Controllers\Backend\Admin\Weddings\WeddingsController;
use App\Http\Controllers\Backend\Admin\Weddings\addVisitorsController;
use App\Http\Controllers\Backend\Admin\MonitorTamuController;
use App\Http\Controllers\Backend\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\Backend\Superadmin\AboutController;
use App\Http\Controllers\Backend\Superadmin\Acara\AcaraController;
use App\Http\Controllers\Backend\Superadmin\ProfileController as SuperadminProfileController;
use App\Http\Controllers\Backend\Superadmin\SuperAdminController;
use App\Http\Controllers\Backend\Superadmin\Users\UsersController;
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

Route::get('/decoration', function () {return view('frontend.service.decoration');});
Route::get('/invital', function () {return view('frontend.service.invital');});
Route::get('/entertaiment', function () {return view('frontend.service.entertaiment');});
Route::get('/documentation', function () {return view('frontend.service.documentation');});
Route::get('/catering', function () {return view('frontend.service.catering');});
Route::get('/vahicle', function () {return view('frontend.service.vahicle');});

Route::middleware('auth', 'role:superadmin')->group(function () {
    Route::get('superadmin/dashboard', [SuperAdminController::class, 'dashboard']);  
    Route::resource('superadmin/acara', AcaraController::class);
    Route::resource('superadmin/users', UsersController::class);
    Route::resource('superadmin/profile', SuperadminProfileController::class);
    Route::get('superadmin/about', [AboutController::class, 'about']);    
});

Route::middleware('auth', 'role:admin')->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'dashboard']);
    Route::resource('admin/visitor', VisitorController::class);
    Route::get('/admin/monitor', [MonitorTamuController::class, 'index']);
    Route::get('/admin/weddings/add-visitors', [addVisitorsController::class, 'index']);
    Route::post('/admin/undangan', [addVisitorsController::class, 'selectedTamu'])->name('admin.undangan');
    Route::resource('admin/weddings', WeddingsController::class);
    Route::resource('admin/profile', AdminProfileController::class);
    Route::get('admin/about', [AdminAboutController::class, 'about']);    
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
