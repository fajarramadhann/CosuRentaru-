<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\CostumeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SewaKostumController;
use App\Http\Controllers\LogSewaKostumController;
use App\Http\Controllers\DataSewaKostumController;
use App\Http\Controllers\Peminjam\PeminjamController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\ExportController;

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     return view('peminjam.dashboard.index');
// })->middleware(['auth', 'verified', 'role:peminjam'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', [PeminjamController::class, 'index'])->middleware('auth', 'role:peminjam')->name('dashboard');
// Route::get('/admin/data-kostum', [CostumController::class, 'index'])->middleware('auth', 'role:admin,manajemen')->name('data-kostum.index');

// Route Role Admin & Manajemen
Route::middleware(['auth', 'role:admin,manajemen'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('admin/costumes', CostumeController::class)->name('costumes.index', 'costumes');
    Route::resource('admin/data-sewa-kostum', DataSewaKostumController::class)->name('data-sewa-kostum.index', 'data-sewa-kostum');
    Route::get('/admin/history-sewa-kostum', [LogSewaKostumController::class, 'index'])->name('log-sewa-kostum.index');
    Route::get('/admin/export-data-costume-excel', [ExportController::class, 'exportCostumes'])->name('export-costumes');
    Route::get('/admin/export-data-sewa-costume-excel', [ExportController::class, 'exportDataSewaKostum'])->name('export-sewa-kostum');
});

// Route Role Admin & Peminjam
Route::middleware(['auth', 'role:admin,peminjam'])->group(function () {
    // Route::get('/sewa-kostum', [SewaKostumController::class, 'index'])->name('sewa-kostum');
    // Route::get('/sewa-kostum/form-sewa', [SewaKostumController::class, 'create'])->name('sewa-kostum.create');
    Route::resource('sewa-kostum', SewaKostumController::class);
});

// Error Pages
Route::get('/error-403', [ErrorController::class, 'error403'])->name('error-403');
Route::get('/error-404', [ErrorController::class, 'error404'])->name('error-404');
Route::get('/error-500', [ErrorController::class, 'error500'])->name('error-500');

require __DIR__ . '/auth.php';
