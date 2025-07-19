<?php

use App\Http\Controllers\FormDaftarController;
use App\Http\Controllers\LandingController;
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

Route::get('/', function () {
    return view('landing');
});

    Route::get('/FormDaftar/form', [FormDaftarController::class, 'index'])->name('FormDaftar.form');
    Route::get('/landing', [LandingController::class, 'index'])->name('Landing');

Route::post('/kirim-pendaftaran', [FormDaftarController::class, 'kirim'])->name('form.kirim');

