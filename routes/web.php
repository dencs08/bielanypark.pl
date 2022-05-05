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
Route::get('wybor3d', [App\Http\Controllers\AppController::class, 'wybor3d']);
Route::get('polityka', [App\Http\Controllers\AppController::class, 'polityka']);

// Route::get('kontakt', [App\Http\Controllers\AppController::class, 'kontakt']);
Route::get('/kontakt', [App\Http\Controllers\EmailController::class, 'create']);
Route::post('/kontaktsent', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');

Route::get('lokale', [App\Http\Controllers\AppController::class, 'lokale']);
Route::get('lokale/lokal', [App\Http\Controllers\StorefrontController::class, 'index']);