<?php

namespace App\Http\Controllers;
use App\Models\Artisan;
use Illuminate\Http\Request;

class ArtisanController extends Controller
{
    public function index()
    {
        $artisans = Artisan::all();
        return view('artisans.index'  ,['artisans' => $artisans]);
    }
    
    public function create()
    {
        return view('artisans.create');
    }

    public function store(Request $request)
    {
            $request->validate([
                'nom' => 'required',
                'sexe' => 'required',
                'pays' => 'required',
                'ville' => 'required',
                'quartier' => 'required',
                'email' => 'required|unique:artisans',
                'telephone' => 'required|unique:artisans',
                'nom_entreprise' => 'required',
                'secteur_activite' => 'required',
                'domaine_activite' => 'required',
                'localisation_entreprise' => 'required',
                'annee_existence' => 'required',
            ]);
            
            Artisan::create($request->all());
            
            return redirect()->route('artisans.index')
                ->with('success', 'Artisan créé avec succès.');
    }
        // $request->validate([
        //     'nom' => 'required|string|max:255',
        //     'sexe' => 'required|string|max:255',
        //     'pays' => 'required|string|max:255',
        //     'ville' => 'required|string|max:255',
        //     'quartier' => 'required|string|max:255',
        //     'email' => 'required|string|max:255|unique:artisans',
        //     'telephone' => 'required|string|max:255|unique:artisans',
        //     'nom_entreprise' => 'required|string|max:255',
        //     'secteur_activite' => 'required|string|max:255',
        //     'domaine_activite' => 'required|string|max:255',
        //     'localisation' => 'required|string|max:255',
        //     'annee_existence' => 'required|integer',
        // ]);
        // Artisan::create($request->all());

        // return redirect()->route('artisans.index')->with('success', 'Artisan créé avec succès.');
    // }

    //   detail 

    // public function show(Artisan $artisan)
    // {
    //     return view('artisans.show', compact('artisan'));
    // }

    public function show($id)
    {
        $artisan = Artisan::find($id);

        if (!$artisan) {
            return redirect()->route('artisans.index')->with('error', 'Artisan non trouvé.');
        }

        return view('artisans.show', compact('artisan'));
    }
    // modification 
    public function edit(Artisan $artisan)
    {
        return view('artisans.edit', compact('artisan'));
    }

    public function update(Request $request, Artisan $artisan)
    {
        $request->validate([

            'nom' => 'required',
            'sexe' => 'required',
            'pays' => 'required',
            'ville' => 'required',
            'quartier' => 'required',
            'email' => 'required|unique:artisans',
            'telephone' => 'required|unique:artisans,telephone,' . $artisan->id,
            'nom_entreprise' => 'required',
            'secteur_activite' => 'required',
            'domaine_activite' => 'required',
            'localisation_entreprise' => 'required',
            'annee_existence' => 'required',
        ]);

        $artisan->update($request->all());

        return redirect()->route('artisans.index')->with('success', 'Artisan mis à jour avec succès.');
    }

    // suppression 

    public function destroy(Artisan $artisan)
    {
        $artisan->delete();

        return redirect()->route('artisans.index')->with('success', 'Artisan supprimé avec succès.');
    }
}
