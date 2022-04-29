<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('email', function () {
    return view('email/email');
});

Route::get('email_answer', function () {
    return view('email/email_answer');
});

Route::get('/', [App\Http\Controllers\AppController::class, 'start']);
Route::get('start', [App\Http\Controllers\AppController::class, 'start']);
// Route::get('kontakt', [App\Http\Controllers\AppController::class, 'kontakt']);
Route::get('lokale', [App\Http\Controllers\AppController::class, 'lokale']);
Route::get('wybor3d', [App\Http\Controllers\AppController::class, 'wybor3d']);
Route::get('polityka', [App\Http\Controllers\AppController::class, 'polityka']);

Route::get('/kontakt', [App\Http\Controllers\EmailController::class, 'create']);
Route::post('/kontaktsent', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');