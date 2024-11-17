<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobPostingController;

Route::get('/postings', [JobPostingController::class, 'showdemo']);
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum'); 

