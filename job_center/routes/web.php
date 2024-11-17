<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\JobPostingController;



Route::get('register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('store');

//Route::get('/login', [AuthController::class, 'showLoginForm'])->middleware('auth.redirect');

Route::post('login', [LoginController::class, 'login'])->name('login')->middleware(RedirectIfAuthenticated::class);
Route::get('login', [LoginController::class, 'showformlogin'])->name('showformlogin');

Route::get('introduce', [HomeController::class, 'showintroduce'])->name('introduce');
Route::get('posting', [JobPostingController::class,'create'])->name('posting')->middleware('auth');
Route::post('store_posting', [JobPostingController::class,'store'])->name('store_posting')->middleware('auth');
//Route::post('/home',[App\Http\Controllers\Auth\LoginController::class],'logout')->name('logout');
// Route::get('create', [RegisterController::class, 'create'])->name('create');
// Route::post('create', [RegisterController::class, 'store'])->name('store');
Auth::routes(['register' => false,'login'=>false]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
