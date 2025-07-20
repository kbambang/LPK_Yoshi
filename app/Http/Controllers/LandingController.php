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
}
