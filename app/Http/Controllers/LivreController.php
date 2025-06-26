<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    // Afficher la liste des livres
    public function index()
    {
        $livres = Livre::paginate(5);
        return view('livres.index', compact('livres'));
    }

    // Afficher le formulaire de création
    public function create()
    {
        return view('livres.create');
    }

    // Enregistrer un nouveau livre
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'auteur' => 'required',
            'annee' => 'required|integer|min:1800|max:' . date('Y'),
            'resume' => 'required|min:10',
        ]);

        Livre::create($request->all());

        return redirect()->route('livres.index')->with('success', 'Livre ajouté avec succès.');
    }

    // Afficher le formulaire d'édition
    public function edit($id)
    {
        $livre = Livre::findOrFail($id);
        return view('livres.edit', compact('livre'));
    }

    // Mettre à jour un livre existant
    public function update(Request $request, $id)
{
    $request->validate([
        'titre' => 'required',
        'auteur' => 'required',
        'annee' => 'required|integer|min:1800|max:' . date('Y'),
        'resume' => 'required|min:10',
    ]);

    $livre = Livre::findOrFail($id);
    $livre->update($request->all());

    return redirect()->route('livres.index')->with('success', 'Livre modifié avec succès.');
}


    // Supprimer un livre
    public function destroy($id)
    {
        $livre = Livre::findOrFail($id);
        $livre->delete();

        return redirect()->route('livres.index')->with('success', 'Livre supprimé avec succès.');
    }
}
