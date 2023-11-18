<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class AbonnementController extends Controller
{
    public function index (){
        return view('Muscu.abonnement');
    }
}
