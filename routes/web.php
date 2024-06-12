<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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



Route::get('admin/dashboard', [HomeController::class, 'adminindex'])->middleware(['auth','admin']);
Route::get('subadmin/dashboard', [HomeController::class, 'subadminindex'])->middleware(['auth','subadmin']);
Route::get('user/dashboard', [HomeController::class, 'userindex'])->middleware(['auth','user']);
