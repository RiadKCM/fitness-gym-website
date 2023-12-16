<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cours;

class CoursAdminController extends Controller
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
        return view('admin.Cours.AddCours');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'type_cours'=>'required',
            'intensite'=>'required',
            'capacite'=>'required',
            'duree'=>'required',
            'id_sport'=>'required',
            'id_coach'=>'required',
        ]);

        if($validate){
            $cours = new Cours();
            $cours->type_cours = $request->type_cours;
            $cours->intensite = $request->intensite;
            $cours->capacite = $request->capacite;
            $cours->duree = $request->duree;
            $cours->id_sport = $request->id_sport;
            $cours->id_coach = $request->id_coach;


            $cours->save();
            
            return redirect('/ListCours')->with("status",'Le cours a été ajouté avec succès');
        }
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
            'type_cours'=>'required',
            'intensite'=>'required',
            'capacite'=>'required',
            'duree'=>'required',
            'id_sport'=>'required',
            'id_coach'=>'required',
        ]);

        if($validate){
            $cours = Cours::find($request->id);
            $cours->type_cours = $request->type_cours;
            $cours->intensite = $request->intensite;
            $cours->capacite = $request->capacite;
            $cours->duree = $request->duree;
            $cours->id_sport = $request->id_sport;
            $cours->id_coach = $request->id_coach;
            
            $cours->update();
            
            return redirect('/ListCours')->with("status",'Le cours a été modifié avec succès');
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
