<!-- Controleur  !-->

<?php

use App\Http\Controllers\CoachController;
use App\Http\Controllers\AbonnementController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\GalerieController;
use App\Http\Controllers\GoMuscuController;
use App\Http\Controllers\HoraireController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/abonnement',[GoMuscuController::class, 'abonnement'])->name('Muscu.abonnement');

Route::get('/coach',[GoMuscuController::class, 'coach'])->name('Muscu.coach');

Route::get('/galerie',[GoMuscuController::class, 'galerie'])->name('Muscu.galerie');

Route::get('/horaire',[GoMuscuController::class, 'horaire'])->name('Muscu.horaire');

Route::get('/club',[GoMuscuController::class, 'club'])->name('Muscu.club');


require __DIR__.'/auth.php';


