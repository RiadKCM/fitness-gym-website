<?php

namespace App\Http\Controllers;

use App\Models\Abonnement;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Sports;

class AdminController extends Controller
{
    public function admin() : View {
        return view('admin.admin');
    }

    public function baseAdmin() : View {
        return view('admin.baseAdmin');
    }

    public function ListAbonnement() : View {
        $abonnements = Abonnement::all();
        return view('admin.ListAbonnement',compact('abonnements'));
    }

    public function ListCoach() : View {
        return view('admin.ListCoach');
    }

    public function ListSport() : View {
        $sports = Sports::all();
        return view('admin.ListSport',compact('sports'));
    }

    public function EditAbonnement($id) : View {
        $abonnements = Abonnement::find($id);
        return view('admin.EditAbonnement',compact('abonnements'));
    }
}
