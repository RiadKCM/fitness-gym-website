<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Souscription;


class SouscriptionAdminController extends Controller
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
        return view('admin.Souscription.AddSouscription');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validate = $request->validate([
        //     'id_user'=>'required',
        //     'id_abonnement'=>'required',
        // ]);


        // if($validate){
        //     $souscription = new Souscription();
        //     $souscription->id_user = $request->id_user;
        //     $souscription->id_abonnement = $request->id_abonnement;

        //     $souscription->save();
            
        //     return redirect('/ListSouscription')->with("status",'Le coach a été ajouté avec succès');
        // }
        

        $validatedData = $request->validate([
            'id_user' => 'required',
            'id_abonnement' => 'required',
        ]);
    
        $souscription = Souscription::create($validatedData);
        
        return redirect('/ListSouscription')->with("status",'Le coach a été ajouté avec succès');

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
    public function update(Request $request)
    {
        $validate = $request->validate([
            'id_user'=>'required',
            'id_abonnement'=>'required',
        ]);

        if($validate){
            $souscription = Souscription::find($request->id);
            $souscription->id_user = $request->id_user;
            $souscription->id_abonnement = $request->id_abonnement;
            
            $souscription->update();
            
            return redirect('/ListSouscription')->with("status",'La souscription a été modifiée avec succès');
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
