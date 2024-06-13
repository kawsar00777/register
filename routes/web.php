<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SuperAdminController;
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

require __DIR__ . '/auth.php';

// ********** Super Admin Routes *********
Route::group(['prefix' => 'super-admin', 'middleware' => ['auth', 'issuperadmin', 'web']], function () {
    Route::get('/dashboard', [SuperAdminController::class, 'dashboard']);

    Route::get('/users', [SuperAdminController::class, 'users'])->name('superAdminUsers');
    Route::get('/manage-role', [SuperAdminController::class, 'manageRole'])->name('manageRole');
    Route::post('/update-role', [SuperAdminController::class, 'updateRole'])->name('updateRole');
    Route::post('/logout',[SuperAdminController::class,'logout']);
});


// ********** Admin Routes *********
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'isadmin', 'web']], function () {


    Route::get('/dashboard', [HomeController::class, 'adminindex']);
});



// ********** Sub Admin Routes *********
Route::group(['prefix' => 'subadmin', 'middleware' => ['auth', 'issubadmin', 'web']], function () {


    Route::get('/dashboard', [HomeController::class, 'subadminindex']);
});





// ********** User Routes *********
Route::group(['prefix' => 'user', 'middleware' => ['auth', 'isuser', 'web']], function () {

    Route::get('/dashboard', [HomeController::class, 'userindex']);
});






