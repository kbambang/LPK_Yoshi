<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instruktur;

class InstrukturController extends Controller
{
   public function index(){
        return view(view: 'instruktur.index');
    }

}
