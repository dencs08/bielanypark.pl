<?php

use Illuminate\Support\Facades\Route;


Route::get('email', function () {
    return view('email/email');
});

Route::get('email_answer', function () {
    return view('email/email_answer');
});

Route::get('/', [App\Http\Controllers\AppController::class, 'start']);
Route::get('start', [App\Http\Controllers\AppController::class, 'start']);
Route::get('polityka', [App\Http\Controllers\AppController::class, 'polityka']);

// Route::get('wybor3d', [App\Http\Controllers\AppController::class, 'wybor3d']);
// Route::get('kontakt', [App\Http\Controllers\AppController::class, 'kontakt']);
Route::get('/kontakt', [App\Http\Controllers\EmailController::class, 'create']);
Route::get('/kontakt/{name}', [App\Http\Controllers\EmailController::class, 'createAsk']);
Route::post('/kontaktsent', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');

Route::get('lokale', [App\Http\Controllers\AppController::class, 'lokale']);
Route::get('lokale/lokal', [App\Http\Controllers\StorefrontController::class, 'index']);

Route::get('lokale/{name}', [App\Http\Controllers\AppController::class, 'lokalID']);

// Route::get('testFilter/{id}', [App\Http\Controllers\FilterController::class, 'testFilter']);
// Route::get('testFilter/{id}', [App\Http\Controllers\StorefrontController::class, 'index']);

Route::get('testFilter/', [App\Http\Controllers\StorefrontController::class, 'index']);

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/storefrontedit', [App\Http\Controllers\StorefrontController::class, 'edit']);
