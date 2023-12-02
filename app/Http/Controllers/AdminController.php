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

    // public function AjouterAbonnement(Request $request) {
    //     $request->validate([
    //         'type_abonnements' => 'required',
    //         'prix' => 'required',
    //         'duree_validite' => 'required',
    //         'Description' => 'required',
    //     ]);

    //     Abonnement::create([
    //         'type_abonnements' => $request->type_abonnements,
    //         'prix' => $request->prix,
    //         'duree_validite' => $request->duree_validite,
    //         'Description' => $request->Description,
    //     ]);

    //     return redirect('/AddAbonnement')->with('status','L\'abonnement a bien été ajouté');
    // }

    public function create(Request $request) {
        $request->validate([
            'type_abonnements' => 'required',
            'prix' => 'required',
            'duree_validite' => 'required',
            'Description' => 'required',
        ]);
    
        Abonnement::create([
            'type_abonnements' => $request->input('type_abonnements'),
            'prix' => $request->input('prix'),
            'duree_validite' => $request->input('duree_validite'),
            'Description' => $request->input('Description'),
        ]);
        // dd($request->all());

        return redirect('/ListAbonnement')->with('status', 'L\'abonnement a bien été ajouté');

    }

    public function ListAbonnement() : View {
        return view('admin.ListAbonnement');
    }

    public function EditCoach() : View {
        return view('admin.EditCoach');
    }
}
