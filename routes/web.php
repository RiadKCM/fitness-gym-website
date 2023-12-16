<!-- Controleur  !-->

<?php

use App\Http\Controllers\AbonnementController;
use App\Http\Controllers\GoMuscuController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AbonnementAdminController;
use App\Http\Controllers\CoachAdminController;
use App\Http\Controllers\SportAdminController;
use App\Http\Controllers\UtilisateurAdminController;
use App\Http\Controllers\SouscriptionAdminController;
use App\Http\Controllers\ParticipationAdminController;
use App\Http\Controllers\CoursAdminController;
use App\Http\Controllers\SouscriptionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('base');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/reservation', function () {
    return view('reservation');
})->middleware(['auth', 'verified'])->name('reservation');


Route::get('/about',function (){
    return view('Muscu.about');
})->name('Muscu.about');

Route::get('/cours',function (){
    return view('Muscu.cours');
})->name('Muscu.cours');

Route::get('/teams',function (){
    return view('Muscu.teams');
})->name('Muscu.teams');

Route::get('/contact',function (){
    return view('Muscu.contact');
})->name('Muscu.contact');

Route::get('/abonnement',[GoMuscuController::class, 'abonnement'])->name('Muscu.abonnement');

Route::get('/coach',[GoMuscuController::class, 'coach'])->name('Muscu.coach');

Route::get('/galerie',[GoMuscuController::class, 'galerie'])->name('Muscu.galerie');

Route::get('/horaire',[GoMuscuController::class, 'horaire'])->name('Muscu.horaire');

Route::get('/club',[GoMuscuController::class, 'club'])->name('Muscu.club');

Route::get('/admin',[AdminController::class, 'admin'])->name('admin.admin');

Route::get('/baseAdmin',[AdminController::class, 'baseAdmin'])->name('admin.baseAdmin');

Route::get('/ListAbonnement',[AdminController::class, 'ListAbonnement'])->name('admin.ListAbonnement');
Route::get('/AddAbonnement',[AbonnementAdminController::class, 'create'])->name('admin.abonnement.create');
Route::post('/AddAbonnement',[AbonnementAdminController::class, 'store'])->name('admin.abonnement.store');
Route::get('/EditAbonnement/{id}',[AdminController::class, 'EditAbonnement'])->name('admin.EditAbonnement');
Route::post('/EditAbonnement',[AbonnementAdminController::class, 'update'])->name('admin.abonnement.update');
Route::get('/DeleteAbonnement/{id}',[AdminController::class, 'DeleteAbonnement'])->name('admin.DeleteAbonnement');


Route::get('/ListCoach',[AdminController::class, 'ListCoach'])->name('admin.ListCoach');
Route::get('/AddCoach',[CoachAdminController::class, 'create'])->name('admin.coach.create');
Route::post('/AddCoach',[CoachAdminController::class, 'store'])->name('admin.coach.store');
Route::get('/EditCoach/{id}',[AdminController::class, 'EditCoach'])->name('admin.EditCoach');
Route::post('/EditCoach',[CoachAdminController::class, 'update'])->name('admin.coach.update');
Route::get('/DeleteCoach/{id}',[AdminController::class, 'DeleteCoach'])->name('admin.DeleteCoach');


Route::get('/ListSport',[AdminController::class, 'ListSport'])->name('admin.ListSport');
Route::get('/AddSport',[SportAdminController::class, 'create'])->name('admin.sport.create');
Route::post('/AddSport',[SportAdminController::class, 'store'])->name('admin.sport.store');
Route::get('/EditSport/{id}',[AdminController::class, 'EditSport'])->name('admin.EditSport');
Route::post('/EditSport',[SportAdminController::class, 'update'])->name('admin.sport.update');
Route::get('/DeleteSport/{id}',[AdminController::class, 'DeleteSport'])->name('admin.DeleteSport');


Route::get('/ListSouscription',[AdminController::class, 'ListSouscription'])->name('admin.ListSouscription');
Route::get('/AddSouscription',[SouscriptionAdminController::class, 'create'])->name('admin.souscription.create');
Route::post('/AddSouscription',[SouscriptionAdminController::class, 'store'])->name('admin.souscription.store');
Route::get('/EditSouscription/{id}',[AdminController::class, 'EditSouscription'])->name('admin.EditSouscription');
Route::post('/EditSouscription',[SouscriptionAdminController::class, 'update'])->name('admin.souscription.update');
Route::get('/DeleteSouscription/{id}',[AdminController::class, 'DeleteSouscription'])->name('admin.DeleteSouscription');


Route::get('/ListUtilisateur',[AdminController::class, 'ListUtilisateur'])->name('admin.ListUtilisateur');
Route::get('/EditUtilisateur/{id}',[AdminController::class, 'EditUtilisateur'])->name('admin.EditUtilisateur');
Route::post('/EditUtilisateur',[UtilisateurAdminController::class, 'update'])->name('admin.utilisateur.update');
Route::get('/DeleteUtilisateur/{id}',[AdminController::class, 'DeleteUtilisateur'])->name('admin.DeleteUtilisateur');


Route::get('/ListParticipation',[AdminController::class, 'ListParticipation'])->name('admin.ListParticipation');
Route::get('/AddParticipation',[ParticipationAdminController::class, 'create'])->name('admin.participation.create');
Route::post('/AddParticipation',[ParticipationAdminController::class, 'store'])->name('admin.participation.store');
Route::get('/EditParticipation/{id}',[AdminController::class, 'EditParticipation'])->name('admin.EditParticipation');
Route::post('/EditParticipation',[ParticipationAdminController::class, 'update'])->name('admin.participation.update');
Route::get('/DeleteParticipation/{id}',[AdminController::class, 'DeleteParticipation'])->name('admin.DeleteParticipation');


Route::get('/ListCours',[AdminController::class, 'ListCours'])->name('admin.ListCours');
Route::get('/AddCours',[CoursAdminController::class, 'create'])->name('admin.cours.create');
Route::post('/AddCours',[CoursAdminController::class, 'store'])->name('admin.cours.store');
Route::get('/EditCours/{id}',[AdminController::class, 'EditCours'])->name('admin.EditCours');
Route::post('/EditCours',[CoursAdminController::class, 'update'])->name('admin.cours.update');
Route::get('/DeleteCours/{id}',[AdminController::class, 'DeleteCours'])->name('admin.DeleteCours');





// Route pour la méthode 'index'
Route::get('/abonnement', [AbonnementController::class, 'index']);

// Route pour la méthode 'show''
Route::get('/', [AbonnementController::class, 'show'])->name('abonnement.show');

Route::post('/inscription', [SouscriptionController::class, 'store'])->name('create-souscription');

Route::get('/coachs',  [\App\Http\Controllers\CoachController::class, 'index']);


require __DIR__.'/auth.php';


