<?php

namespace App\Http\Controllers;

use App\Models\Abonnement;
use Illuminate\View\View;
use App\Models\Sports;
use App\Models\Coach;
use App\Models\User;
use App\Models\Souscription;
use App\Models\Cours;
use App\Models\Participation;

class AdminController extends Controller
{
    public function admin() : View {
        return view('admin.admin');
    }

    public function baseAdmin() : View {
        return view('admin.baseAdmin');
    }


    // Abonnement
    public function ListAbonnement() : View {
        $abonnements = Abonnement::all();
        return view('admin.Abonnement.ListAbonnement',compact('abonnements'));
    }

    public function EditAbonnement($id) : View {
        $abonnements = Abonnement::find($id);
        return view('admin.Abonnement.EditAbonnement',compact('abonnements'));
    }

    public function DeleteAbonnement($id){
        $abonnements = Abonnement::find($id);
        $abonnements->delete();
        return redirect('/ListAbonnement')->with("status",'L\'abonnement a été supprimé avec succès');
    }

    // Coach
    public function ListCoach() : View {
        $coachs = Coach::all();
        return view('admin.Coach.ListCoach',compact('coachs'));
    }

    public function EditCoach($id) : View {
        $coachs = Coach::find($id);
        return view('admin.Coach.EditCoach',compact('coachs'));
    }

    public function DeleteCoach($id){
        $coachs = Coach::find($id);
        $coachs->delete();
        return redirect('/ListCoach')->with("status",'Le coach a été supprimé avec succès');
    }

    // Sport
    public function ListSport() : View {
        $sports = Sports::all();
        return view('admin.Sport.ListSport',compact('sports'));
    }

    public function EditSport($id) : View {
        $sports = Sports::find($id);
        return view('admin.Sport.EditSport',compact('sports'));
    }

    public function DeleteSport($id){
        $sports = Sports::find($id);
        $sports->delete();
        return redirect('/ListSport')->with("status",'L\'abonnement a été supprimé avec succès');
    }

    // Utilisateur
    public function ListUtilisateur() : View {
        $users = User::all();
        return view('admin.Utilisateur.ListUtilisateur',compact('users'));
    }

    public function EditUtilisateur($id) : View {
        $users = User::find($id);
        return view('admin.Utilisateur.EditUtilisateur',compact('users'));
    }

    public function DeleteUtilisateur($id){
        $users = User::find($id);
        $users->delete();
        return redirect('/ListUtilisateur')->with("status",'L\'utilisateur a été supprimé avec succès');
    }

    // Souscription
    public function ListSouscription() : View {
        $souscriptions = Souscription::all();
        return view('admin.Souscription.ListSouscription',compact('souscriptions'));
    }

    public function EditSouscription($id) : View {
        $souscriptions = Souscription::find($id);
        return view('admin.souscription.EditSouscription',compact('souscriptions'));
    }

    public function DeleteSouscription($id){
        $souscriptions = Souscription::find($id);
        $souscriptions->delete();
        return redirect('/ListSouscription')->with("status",'La souscription a été supprimé avec succès');
    }

    // Cours
    public function ListCours() : View {
        $cours = Cours::all();       
        return view('admin.Cours.ListCours',compact('cours'));
    }

    public function EditCours($id) : View {
        $cours = Cours::find($id);
        return view('admin.Cours.EditCours',compact('cours'));
    }

    public function DeleteCours($id){
        $cours = Cours::find($id);
        $cours->delete();
        return redirect('/ListCours')->with("status",'L\'utilisateur a été supprimé avec succès');
    }

    // Participation
    public function ListParticipation() : View {
        $participations = Participation::all();
        return view('admin.Participation.ListParticipation',compact('participations'));
    }

    public function EditParticipation($id) : View {
        $participtions = User::find($id);
        return view('admin.Particiption.EditParticipation',compact('participtions'));
    }

    public function DeleteParticipation($id){
        $participtions = User::find($id);
        $participtions->delete();
        return redirect('/ListParticipation')->with("status",'L\'utilisateur a été supprimé avec succès');
    }
}
