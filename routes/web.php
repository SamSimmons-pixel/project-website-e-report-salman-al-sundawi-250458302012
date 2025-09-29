<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Features;
use Illuminate\Support\Facades\Route;

$buh = 'Features';

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('auth')->group(function(){
    Route::get('/register', Register::class)->name('register');
    Route::get('/login', Login::class)->name('login');
});

Route::get('/dashboard', function () {
    return view('layouts.app');
})->name('app');

Route::middleware('auth')
    ->prefix('warga')->group(function() {
        Route::get('/dashboard', Features\Warga\Dashboard::class)->name('warga.dashboard');
        Route::get('/laporan', Features\Warga\Laporan::class)->name('warga.laporan');
        Route::get('/laporan/create', Features\Warga\Laporan\CreateLaporan::class)->name('warga.create-laporan');
        Route::get('/laporan/edit/{id}', Features\Warga\Laporan\EditLaporan::class)->name('warga.edit-laporan');

        Route::get('/profile', Features\Warga\Profile::class)->name('warga.profile');
});

Route::middleware('auth')
    ->prefix('admin')->group(function() {
        Route::get('/', Features\Dashboard::class)->name('admin.dashboard');
        Route::get('/list-laporan', Features\ListLaporan::class)->name('admin.list-laporan');
        Route::get('/list-warga', Features\ListWarga::class)->name('admin.list-warga');
        Route::get('/profile', Features\MyProfile::class)->name('admin.profile');
});


