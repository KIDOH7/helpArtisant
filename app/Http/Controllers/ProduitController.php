<?php

namespace App\Http\Controllers;


use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProduitController extends Controller
{
    public function index()
    {
        $produits = Produit::where('artisan_id', Auth::id())->get();
        return view('produits.index', compact('produits'));
    }

    public function create()
    {
        return view('produits.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom_produit' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|mimes:mp4,mov,ogg,qt|max:20000',
        ]);

        $data = $request->all();
        $data['artisan_id'] = Auth::id();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images');
        }

        if ($request->hasFile('video')) {
            $data['video'] = $request->file('video')->store('videos');
        }

        Produit::create($data);

        return redirect()->route('produits.index')
                         ->with('success', 'Produit créé avec succès.');
    }

    public function show(Produit $produit)
    {
        $this->authorize('view', $produit);
        return view('produits.show', compact('produit'));
    }

    public function edit(Produit $produit)
    {
        $this->authorize('update', $produit);
        return view('produits.edit', compact('produit'));
    }

    public function update(Request $request, Produit $produit)
    {
        $this->authorize('update', $produit);

        $request->validate([
            'nom_produit' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|mimes:mp4,mov,ogg,qt|max:20000',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images');
        }

        if ($request->hasFile('video')) {
            $data['video'] = $request->file('video')->store('videos');
        }

        $produit->update($data);

        return redirect()->route('produits.index')
                         ->with('success', 'Produit mis à jour avec succès.');
    }

    public function destroy(Produit $produit)
    {
        $this->authorize('delete', $produit);
        $produit->delete();

        return redirect()->route('produits.index')
                         ->with('success', 'Produit supprimé avec succès.');
    }
}
