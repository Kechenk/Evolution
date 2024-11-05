<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GroupParticipantController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SoloParticipantController;
use App\Models\GroupParticipant;
use App\Models\SoloParticipant;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/masuk', function () {
    return view('masuk');
});

Route::get('/mpek', function () {
    return view('mpek');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/electra', function () {
    return view('electra');
})->middleware(['auth', 'verified'])->name('electra');

Route::get('/olympic', function () {
    return view('olympic');
})->middleware(['auth', 'verified'])->name('olympic');

Route::post('/register/tunggal', [SoloParticipantController::class, 'registerTunggal'])->name('tunggal.register');
Route::post('/register/beregu', [GroupParticipantController::class, 'registerberegu'])->name('beregu.register');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
