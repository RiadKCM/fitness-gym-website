<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abonnement;

class AbonnementAdminController extends Controller
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
       return view('admin.Abonnement.AddAbonnement');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'type_abonnement'=>'required',
            'prix'=>'required',
            'duree_validite'=>'required',
            'description'=>'required'
        ]);

        if($validate){
            $abonnement = new Abonnement();
            $abonnement->type_abonnement = $request->type_abonnement;
            $abonnement->prix = $request->prix;
            $abonnement->duree_validite = $request->duree_validite;
            $abonnement->description = $request->description;
            
            $abonnement->save();
            
            return redirect('/ListAbonnement')->with("status",'L\'abonnement a été ajouté avec succès');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        
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
    public function update(Request $request)
    {
        $validate = $request->validate([
            'type_abonnement'=>'required',
            'prix'=>'required',
            'duree_validite'=>'required',
            'description'=>'required',
        ]);

        if($validate){
            $abonnement = Abonnement::find($request->id);
            $abonnement->type_abonnement = $request->type_abonnement;
            $abonnement->prix = $request->prix;
            $abonnement->duree_validite = $request->duree_validite;
            $abonnement->description = $request->description;
            
            $abonnement->update();
            
            return redirect('/ListAbonnement')->with("status",'L\'abonnement a été modifié avec succès');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
