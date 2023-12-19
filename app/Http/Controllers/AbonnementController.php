<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abonnement;
use App\Models\Souscription;
use App\Models\Coach;

class AbonnementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abonnements = Abonnement::all();
        return view('Muscu.abonnement', compact('abonnements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $abonnementUtilisateur = Abonnement::join('souscription', 'abonnements.id', '=', 'souscription.id_abonnement')
        ->join('users', 'souscription.id_user', '=', 'users.id')
        ->where('users.id', auth()->user()->id)
        ->select('abonnements.*')
        ->first();
        return view('Muscu.gestion',compact('abonnementUtilisateur'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $abonnements = Abonnement::all();
        $coachs = Coach::all();
        //$id_abonnement = 1;
    
        return view('Muscu.welcome', [
            'abonnements' => $abonnements,
            'coachs' => $coachs
            //'id_abonnement' => $id_abonnement,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $souscription = Souscription::where('id_user', auth()->user()->id)
                                    ->where('id_abonnement', $id)
                                    ->first();

        if ($souscription) {
            $souscription->delete();

            return redirect()->route('gestion')->with('success', 'Abonnement résilié avec succès.');
        }

        return redirect()->back()->with('error', 'Erreur lors de la résiliation de l\'abonnement.');
    }
}
