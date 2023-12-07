<?php

namespace App\Http\Controllers;

use App\Models\Abonnement;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function admin() : View {
        return view('admin.admin');
    }

    public function baseAdmin() : View {
        return view('admin.baseAdmin');
    }

    public function AddAbonnement() : View {
        return view('admin.AddAbonnement');
    }

    public function ListAbonnement() : View {
        // $abonnement = Abonnement::orderby('created_at')->get();
        return view('admin.ListAbonnement');
    }

    public function ListCoach() : View {
        return view('admin.ListCoach');
    }

    public function ListSport() : View {
        return view('admin.ListSport');
    }


}
