<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EtudiantModel;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $etudiants = EtudiantModel::all(); //SELECT * FROM etudiants
        return view('renseignements', compact('etudiants'));
        // return view('renseignements');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Récupérer les données du formulaire
        $etudiant = new EtudiantModel();
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->age = $request->input('age');
        $etudiant->classe = $request->input('classe');
        $etudiant->save(); //Sauvegarder

        return redirect('/etudiant_page')->with('status', 'L\'étudiant ' .$request->input('nom'). '  ' .$request->input('prenom').
         ' a été ajouté avec succès !!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $etudiant = EtudiantModel::find($id)->find($id); //SELECT * FROM etudiants WHERE id = $id
        return view('afficher', compact('etudiant'));
     
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $etudiant = EtudiantModel::find($id); //SELECT * FROM etudiants WHERE id = $id
        return view('editer', compact('etudiant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $etudiant = EtudiantModel::find($id);
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->age = $request->input('age');
        $etudiant->classe = $request->input('classe');
        $etudiant->save(); //Mettre à jour
        return redirect()->back(); //Retour à la page d'accueil

        return redirect('/etudiant_page')->with('status', 'L\'étudiant  '  .$request->input('nom').  '  '  .$request->input('prenom').
         ' a été modifié avec succès !!');

            // return view('renseignements', compact('etudiant'));
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $etudiant = EtudiantModel::find($id);
        $etudiant->delete(); //Supprimer
        return redirect('/etudiant_page')->with('status', 'L\'étudiant ' .$etudiant->nom. ' ' .$etudiant->prenom.
         ' a été supprimé avec succès !!');
        // return redirect()->back(); //Retour à la page d'accueil
    }
}
