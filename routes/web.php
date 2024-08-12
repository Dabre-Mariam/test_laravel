<?php

use App\Http\Controllers\EtudiantController;
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
    return view('welcome');
});

Route::get('/accueil', function(){
    return view('accueil');
});



// Route::get('/renseignements', function(){
//     return view('renseignements');
// });

Route::get('/etudiant_page', [EtudiantController::class, 'index'])->name('etudiant');


Route::post('/insertion_etudiant', [EtudiantController::class,'store'])->name('insertion');

Route::get('/afficher_etudiant/{id}', [EtudiantController::class, 'show']);

Route::get('/edit_etudiant/{id}', [EtudiantController::class, 'edit']);

Route::put('/update_etudiant/{id}', [EtudiantController::class, 'update']);

Route::delete('/supprimer_etudiant/{id}', [EtudiantController::class, 'destroy']);

