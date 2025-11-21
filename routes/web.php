<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login', 302);

Route::prefix('siswa')->middleware('isSiswa')->name('siswa.')->group(function(){
    Route::get('/beranda', function () {
        return view('siswa.beranda');
    })->name('beranda');
});

Route::prefix('guru')->middleware('isGuru')->name('guru.')->group(function(){
    Route::get('/beranda', function(){
        return view('guru.beranda-guru');
    })->name('beranda');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
