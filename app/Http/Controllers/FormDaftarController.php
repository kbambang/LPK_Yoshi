<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\FormPendaftaranMail;
use Illuminate\Support\Facades\Mail;

class FormDaftarController extends Controller
{
    public function index(){
        return view('FormDaftar.form');
    }

  public function kirim(Request $request)
    {
        $data = $request->all();

        Mail::to('kbambang202@gmail.com')->send(new FormPendaftaranMail($data));

        return back()->with('success', 'Data berhasil dikirim ke email!');
    }
}
