<?php


namespace App\Http\Controllers;

use App\Models\Artisan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Auth;

class ArtisanControllers extends Controller
{

    public function index()
    {
        $artisans = Artisan::all();
        return view('artisanss.index'  ,['artisans' => $artisans]);
    }
    
    // Afficher le formulaire de création d'un artisan
    public function create()
    {
        return view('artisanss.create');
    }

    // Enregistrer un nouvel artisan
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => ['required', 'string', 'max:255'],
            'sexe' => ['required', 'string', 'in:Homme,Femme'],
            'ville' => ['required', 'string', 'max:255'],
            'commune' => ['nullable', 'string', 'max:255'],
            'autre_ville' => ['nullable', 'string', 'max:255'],
            'quartier' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'string', 'email', 'max:255', 'unique:artisans'],
            'telephone' => ['required', 'string', 'max:255', 'unique:artisans'],
            'nom_entreprise' => ['required', 'string', 'max:255'],
            'num_entreprise' => ['nullable', 'string', 'max:255'],
            'secteur_activite' => ['required', 'string', 'max:255'],
            'domaine_activite' => ['required', 'string', 'max:255'],
            'certif' => ['required', 'string', 'in:oui,non'],
            'zone_couverture' => ['nullable', 'string', 'max:255'],
            'annee_existence' => ['required', 'integer'],
            'latitude' => ['nullable', 'numeric'],
            'longitude' => ['nullable', 'numeric'],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        Artisan::create([
            'nom' => $request->nom,
            'sexe' => $request->sexe,
            'ville' => $request->ville,
            'commune' => $request->commune,
            'autre_ville' => $request->autre_ville,
            'quartier' => $request->quartier,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'nom_entreprise' => $request->nom_entreprise,
            'num_entreprise' => $request->num_entreprise,
            'secteur_activite' => $request->secteur_activite,
            'domaine_activite' => $request->domaine_activite,
            'certif' => $request->certif,
            'zone_couverture' => $request->zone_couverture,
            'annee_existence' => $request->annee_existence,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            // 'password' => Hash::make($request->password),
        ]);

        return redirect()->route('dashboard')->with('success', 'Artisan créé avec succès.');
    }


    public function show($id)
    {
        $artisan = Artisan::find($id);

        if (!$artisan) {
            return redirect()->route('artisanss.index')->with('error', 'Artisan non trouvé.');
        }

        return view('artisanss.show', compact('artisan'));
    }
    // Afficher le formulaire de modification d'un artisan
    public function edit($id)
    {
        $artisan = Artisan::findOrFail($id);
        return view('artisanss.edit', compact('artisan'));
    }

    // Mettre à jour les informations d'un artisan
    public function update(Request $request, $id)
    {
        $artisan = Artisan::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'nom' => ['required', 'string', 'max:255'],
            'sexe' => ['required', 'string', 'in:Homme,Femme'],
            'ville' => ['required', 'string', 'max:255'],
            'commune' => ['nullable', 'string', 'max:255'],
            'autre_ville' => ['nullable', 'string', 'max:255'],
            'quartier' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'string', 'email', 'max:255', 'unique:artisans,email,'.$artisan->id],
            'telephone' => ['required', 'string', 'max:255', 'unique:artisans,telephone,'.$artisan->id],
            'nom_entreprise' => ['required', 'string', 'max:255'],
            'num_entreprise' => ['required', 'string', 'max:255'],
            'secteur_activite' => ['required', 'string', 'max:255'],
            'domaine_activite' => ['required', 'string', 'max:255'],
            'certif' => ['required', 'string', 'max:255'],
            'zone_couverture' => ['required', 'string', 'max:255'],
            'annee_existence' => ['required', 'integer'],
            'latitude' => ['nullable', 'numeric'],
            'longitude' => ['nullable', 'numeric'],
        ]);

        if ($validator->fails()) {
            return redirect()->route('artisanss.edit', $artisan->id)
                        ->withErrors($validator)
                        ->withInput();
        }

        $artisan->update($request->all());

        return redirect()->route('dashboard')->with('success', 'Informations modifiées avec succès.');
    }

    public function destroys(Artisan $artisan)
    {
        $artisan->delete();

        return redirect()->route('artisanss.index')->with('success', 'Artisan supprimé avec succès.');
    }

    public function destroy($id)
    {
        $artisan = Artisan::findOrFail($id);
        $artisan->delete();

        return redirect()->route('artisanss.index')->with('success', 'Artisan supprimé avec succès.');
    }


    // rechercher les artisans 


public function showSearchForm()
{
    $sectors = [
        'Couture', 'Menuiserie', 'Coiffure', 'Plomberie', 'Electricité', 'Sculpture', 'Poterie',
        'Maçonnerie', 'Peinture','Artisanat d\'art', 'Jardinage', 'Informatique', 'Tissage', 'Agriculture',
        'Restauration', 'Transport', 'Nettoyage' , 'cordonnier', 'Coiffure et soins de beauté', 'Autre'
    ];

    $cities = Artisan::select('ville')->distinct()->get()->pluck('ville');
    $communes = [
        'Abobo', 'Adjamé', 'Attécoubé', 'Cocody', 'Koumassi', 'Marcory',
        'Plateau', 'Port-Bouët', 'Treichville', 'Yopougon', 'songon' , 
    ];

    return view('artisanss.search', compact('sectors', 'cities', 'communes'));
}

public function autocompleteSectors(Request $request)
{
    $term = $request->input('term');

    $sectors = [
        'Couture', 'Menuiserie', 'Coiffure', 'Plomberie', 'Electricité', 'Sculpture', 'Poterie',
        'Maçonnerie', 'Peinture','Artisanat d\'art', 'Jardinage', 'Informatique', 'Tissage', 'Agriculture',
        'Restauration', 'Transport', 'Nettoyage' , 'cordonnier ', 'Coiffure et soins de beauté', 'Autre'
    ];

    // Filtrer les secteurs en fonction du terme entré par l'utilisateur
    $filteredSectors = array_filter($sectors, function ($sector) use ($term) {
        return stripos($sector, $term) !== false;
    });

    return response()->json($filteredSectors);
}

public function search(Request $request)
{
    $query = Artisan::query();

    if ($request->filled('secteur_activite')) {
        $query->where('secteur_activite', 'like', '%' . $request->input('secteur_activite') . '%');
    }

    if ($request->filled('ville')) {
        $query->where('ville', 'like', '%' . $request->input('ville') . '%');

        if (strtolower($request->input('ville')) == 'abidjan' && $request->filled('commune')) {
            $query->where('commune', 'like', '%' . $request->input('commune') . '%');
        }
    }

    if ($request->filled('quartier')) {
        $query->where('quartier', 'like', '%' . $request->input('quartier') . '%');
    }

    $artisans = $query->get();

    $secondarySearch = false;
    if ($artisans->isEmpty() && $request->filled('city') && $request->filled('sector')) {
        $secondaryQuery = Artisan::query();

        $secondaryQuery->where('ville', 'like', '%' . $request->input('ville') . '%')
                       ->where('secteur_activite', 'like', '%' . $request->input('secteur_activite') . '%');

        $artisans = $secondaryQuery->get();

        if ($artisans->isNotEmpty()) {
            $secondarySearch = true;
        }
    }

    return view('artisanss.search_results', ['artisans' => $artisans]);
}


public function welcome()
{
    $sectors = Artisan::select('secteur_activite')->distinct()->pluck('secteur_activite');
    return view('welcome', ['sectors' => $sectors]);
}

public function showArtisansBySector($sector)
{
    $artisans = Artisan::where('secteur_activite', $sector)->get();
    return view('artisanss.artisans_by_sector', compact('artisans', 'sector'));
}


}
