<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class GoMuscuController extends Controller
{
    public function abonnement (){
        return view('Muscu.abonnement');
    }
    public function galerie() : View {
        return view('Muscu.galerie');
    }
    public function horaire() : View {
        return view('Muscu.horaire');
    }
    public function club() : View {
        return view('Muscu.club');
    }
    public function coach() : View {
        return view('Muscu.coach');
    }
}
