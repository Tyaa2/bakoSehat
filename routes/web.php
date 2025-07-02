<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

Route::get('/', function () {
    if (!Auth::check()) {
        return redirect()->route('login');
    }
    $user = Auth::user();
    switch ($user->role) {
        case 'dinkes':
            return redirect()->route('dinkes.dashboard');
        case 'puskesmas':
            return redirect()->route('puskesmas.dashboard');
        case 'rsud':
            return redirect()->route('rsud.dashboard');
        case 'kelurahan':
            return redirect()->route('kelurahan.dashboard');
        case 'dukcapil':
            return redirect()->route('dukcapil.dashboard');
        default:
            return new RedirectResponse('/no-dashboard');
    }
});

Route::middleware(['auth', 'isDinkes'])->group(function () {
    Route::resource('dinkes/users', Controllers\UserManagementController::class);
});

Route::middleware(['auth', 'isDinkes'])->prefix('dinkes')->name('dinkes.')->group(function () {
    Route::get('data-warga', [Controllers\Dinkes\DataWargaController::class, 'index'])->name('data-warga.index');
    Route::patch('data-warga/{id}/approve', [Controllers\Dinkes\DataWargaController::class, 'approve'])->name('data-warga.approve');
    Route::get('dashboard', [Controllers\Dinkes\DashboardDinkesController::class, 'index'])->name('dashboard');
});

Route::middleware(['auth', 'isPuskesmas'])->prefix('puskesmas')->name('puskesmas.')->group(function () {
    Route::resource('data-warga', Controllers\DataWargaController::class);
    Route::get('dashboard', [Controllers\DashboardPuskesmasController::class, 'index'])->name('dashboard');

    // Add route for NIK check to fix warning
    Route::get('cek-nik', [Controllers\DataWargaController::class, 'cekNIK'])->name('cek-nik');
    Route::get('dashboard-puskesmas/refresh-json', [Controllers\DashboardPuskesmasController::class, 'refreshJson']);

   
});

Route::middleware(['auth', 'isRsud'])->prefix('rsud')->name('rsud.')->group(function () {
    Route::resource('data-warga', Controllers\Rsud\DataWargaController::class);
    Route::get('dashboard', [Controllers\Rsud\DashboardRsudController::class, 'index'])->name('dashboard');
     // Add route for NIK check to fix warning
    Route::get('cek-nik', [Controllers\Rsud\DataWargaController::class, 'cekNIK'])->name('cek-nik');

    // Add missing refresh-json route for dashboard
    Route::get('dashboard-rsud/refresh-json', [Controllers\Rsud\DashboardRsudController::class, 'refreshJson'])->name('dashboard-rsud.refresh-json');
});

Route::middleware(['auth', 'isKelurahan'])->prefix('kelurahan')->name('kelurahan.')->group(function () {
    Route::post('data-warga/{id}/tolak', [Controllers\Kelurahan\DataWargaController::class, 'tolak'])->name('kelurahan.data-warga.tolak');
    Route::resource('data-warga', Controllers\Kelurahan\DataWargaController::class);
   Route::get('dashboard', [Controllers\Kelurahan\DashboardKelurahanController::class, 'index'])->name('dashboard');

   // Add missing refresh-json route for dashboard
    Route::get('dashboard-kelurahan/refresh-json', [Controllers\Kelurahan\DashboardKelurahanController::class, 'refreshJson'])->name('dashboard-kelurahan.refresh-json');

});

Route::middleware(['auth', 'isDukcapil'])->prefix('dukcapil')->name('dukcapil.')->group(function () {
    Route::resource('approve', Controllers\Dukcapil\ApproveController::class)->only(['index', 'update', 'show']);
    Route::get('dashboard', [Controllers\Dukcapil\DashboardDukcapilController::class, 'index'])->name('dashboard');
    // Add missing refresh-json route for dashboard
    Route::get('dashboard-dukcapil/refresh-json', [Controllers\Dukcapil\DashboarddukcapilController::class, 'refreshJson'])->name('dashboard-dukcapil.refresh-json');

});

Route::middleware(['auth', 'isDukcapil'])->prefix('dukcapil')->name('dukcapil.')->group(function () {
    Route::resource('approve', Controllers\Dukcapil\ApproveController::class);

    // Route untuk approve/reject status
    Route::patch('approve/{id}/approve', [Controllers\Dukcapil\ApproveController::class, 'approve'])->name('approve');
});






Route::middleware('auth')->group(function () {
    Route::get('/profile', [Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/export', [Controllers\ExportController::class, 'export'])->name('export.excel');
    Route::get('/export/history', [Controllers\ExportController::class, 'history'])->name('export.history');
    Route::get('/export/download/{filename}', [Controllers\ExportController::class, 'download'])->name('export.download');
    Route::delete('/export/history/{id}', [Controllers\ExportController::class, 'delete'])->name('export.delete');
});
require __DIR__.'/auth.php';  