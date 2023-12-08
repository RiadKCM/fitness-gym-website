<?php

namespace App\Http\Controllers;

use App\Models\Abonnement;
use App\Models\User;
use Illuminate\Http\Request;

class AbonnementController extends Controller
{
    public function index()
    {
        $abonnements = Abonnement::all();
        return view('abonnements', compact('abonnements'));
    }

    public function show(Request $request)
    {
        $abonnements = Abonnement::all();
        return view('base', ['abonnements' => $abonnements]);
    }
}
