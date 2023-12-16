<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participation;

class ParticipationAdminController extends Controller
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
        return view('admin.Participation.AddParticipation');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'date_participation'=>'required',
            'id_user'=>'required',
            'id_cours'=>'required'
        ]);

        if($validate){
            $participation = new Participation();
            $participation->date_participation = $request->date_participation;
            $participation->id_user = $request->id_user;
            $participation->id_cours = $request->id_cours;

            $participation->save();
            
            return redirect('/ListParticipation')->with("status",'La participation a été ajoutée avec succès');
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
            'date_participation'=>'required',
            'id_user'=>'required',
            'id_cours'=>'required'
        ]);

        if($validate){
            $participation = Participation::find($request->id);
            $participation->date_participation = $request->date_participation;
            $participation->id_user = $request->id_user;
            $participation->id_cours = $request->id_cours;
            
            $participation->update();
            
            return redirect('/ListParticipation')->with("status",'La participation a été modifiée avec succès');
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
