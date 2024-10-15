<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');

Route::middleware('guest')->group(function(){
    Route::view('/login', 'auth.login')->middleware('guest')->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::view('/register', 'auth.register')->middleware('guest');
    Route::post('/register', [AuthController::class, 'register']);
});


Route::middleware('auth')->group(function(){
    // Route::view('/dashboard', 'auth.dashboard')->name('dasboard');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dasboard');
    // Route::view('/book', 'auth.book')->name('book');
    // Route::post('/book', [AppointmentController::class, 'store']);    
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::resource('appointment', AppointmentController::class);
});


// react page
Route::get('/admin', function () {
    return view('admin');  // The admin dashboard using React
});   // Allow React to handle internal routing
