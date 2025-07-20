<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        return view('landing');
    }

    public function showIM(){
        return view('program.im');
    }
    public function showMagang(){
        return view('program.magang');
    }
    public function showTG(){
        return view('program.tg');
    }
    public function showBerita(){
        return view('informasi.berita');
    }
    // }
    // public function showBerita(){
    // $berita = Berita::orderBy('tanggal', 'desc')->take(6)->get();

    //     return view('informasi.berita', compact('berita'));
    // }
    public function showSelamat(){
        return view('informasi.selamat');
    }
    public function showPengumuman(){
        return view('informasi.pengumuman');
    }
    public function showGallery(){
        return view('informasi.gallery');
    }
}
