<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Souscription;

class SouscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_user' => 'required',
            'id_abonnement' => 'required',
        ]);
    
        $souscription = Souscription::create($validatedData);
        
        return redirect('/')->with("status",'La souscription a été effectuée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function destroy(string $id)
    { 
        //
    }

    public function souscrire(Request $request, $id_abonnement)
    {
        $id_user = auth()->id();

        $souscriptionExistante = Souscription::where('id_user', $id_user)->exists();

        if (!$souscriptionExistante) {
            // L'utilisateur n'a pas encore souscrit à cet abonnement, ajoutez la souscription
            $souscription = new Souscription();
            $souscription->id_user = $id_user;
            $souscription->id_abonnement = $id_abonnement;
            $souscription->save();

            return redirect()->back()->with('success', 'Souscription effectuée avec succès');
        } else {
            return redirect()->back()->with('error', 'Vous avez déjà souscrit à cet abonnement');
        }
    }
}
