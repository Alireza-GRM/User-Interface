<?php

use App\Http\Controllers\VerificationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/' , [HomeController::class , 'Home'])->name('home');

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'fa'])) {
        session(['locale' => $locale]);
    }
    
    return redirect()->back();
});


Auth::routes();

Route::get('/logout' , [LogoutController::class , 'logout'])->name('logout');

Route::get('/verification', [VerificationController::class, 'showVerificationForm'])->name('verification.page');

Route::post('/verification/verify', [VerificationController::class, 'verifyCode'])->name('verification.code');
