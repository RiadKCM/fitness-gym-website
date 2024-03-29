<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coach;

class CoachAdminController extends Controller
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
        return view('admin.Coach.AddCoach');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validateData = $request->validate([
        //     'nom' => 'required',
        //     'prenom' => 'required',
        //     'id_sport' => 'required',
        //     'photo_path'=>'required'
        // ]);

        // $request->file('image')->store('/public/images');

        // $coach = Coach::create($validateData);
        

        $name = $request->file('photo_path')->getClientOriginalName();
        $request->file('photo_path')->storeAs('public/images/', $name);
        
        $coach = new Coach();
        $coach->nom = $request->nom;
        $coach->prenom = $request->prenom;
        $coach->id_sport = $request->id_sport;
        $coach->photo_path = $name;
        
        $coach->save();
        
            
       
        return redirect('/ListCoach')->with('status', 'Le coach a été ajouté avec succès');
        
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
            'nom'=>'required',
            'prenom'=>'required',
            'id_sport'=>'required',
            'photo_path'=>'required'
        ]);

        if($validate){
            $coach = Coach::find($request->id);
            $coach->nom = $request->nom;
            $coach->prenom = $request->prenom;
            $coach->id_sport = $request->id_sport;
            $coach->photo_path = $request->photo_path;
            
            $coach->update();
            
            return redirect('/ListCoach')->with("status",'Le coach a été modifié avec succès');
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
