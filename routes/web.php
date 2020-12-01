<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\Front\FrontController::class, 'index']);

Route::post('/', [\App\Http\Controllers\Front\FrontController::class, 'store']);

Route::get('login', [\App\Http\Controllers\Auth\AuthController::class, 'index'])->name('login')->middleware('guest');

Route::post('login', [\App\Http\Controllers\Auth\AuthController::class, 'login'])->name('login.masuk');

Route::post('logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('login.keluar');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function ()
{
    Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    Route::get('setup', [\App\Http\Controllers\Admin\SetupController::class, 'index'])->name('setup');

    Route::get('setup/all', [\App\Http\Controllers\Admin\SetupController::class, 'getData'])->name('setup.all');

    Route::post('setup', [\App\Http\Controllers\Admin\SetupController::class, 'update'])->name('setup.update');

    Route::get('pembicara', [\App\Http\Controllers\Admin\PembicaraController::class, 'index'])->name('pembicara.index');

    Route::get('peserta', [\App\Http\Controllers\Admin\PesertaController::class, 'index'])->name('peserta.index');

    Route::get('peserta/all', [\App\Http\Controllers\Admin\PesertaController::class, 'getAllRegister']);
});
