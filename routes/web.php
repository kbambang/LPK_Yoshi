<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FormDaftarController;
use App\Http\Controllers\InstrukturController;

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
    Route::get('/instruktur', [InstrukturController::class, 'index'])->name('instruktur');
    Route::get('/instruktur/{id}', [InstrukturController::class, 'show'])->name('show');
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::get('/FormDaftar/form', [FormDaftarController::class, 'index'])->name('FormDaftar.form');
    Route::get('/landing', [LandingController::class, 'index'])->name('Landing');
    Route::get('/sejarah', [SejarahController::class, 'index'])->name('sejarah');
    Route::get('/visi-misi', [VisiMisiController::class, 'index'])->name('visi-misi');

Route::post('/kirim-pendaftaran', [FormDaftarController::class, 'kirim'])->name('form.kirim');

//program
Route::get('/im', [LandingController::class, 'showIM'])->name('program.im');
Route::get('/magang', [LandingController::class, 'showMagang'])->name('program.magang');
Route::get('/tg', [LandingController::class, 'showTG'])->name('program.tg');

//informasi berita,selamat,pengumuman,gallery
Route::get('/berita', [LandingController::class, 'showBerita'])->name('informasi.berita');
Route::get('/selamat', [LandingController::class, 'showSelamat'])->name('informasi.selamat');
Route::get('/pengumuman', [LandingController::class, 'showPengumuman'])->name('informasi.pengumuman');
Route::get('/gallery', [LandingController::class, 'showGallery'])->name('informasi.gallery');



