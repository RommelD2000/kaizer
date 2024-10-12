<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use App\Models\produit;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function accueil()
    {
        $categories = categorie::all();
        return view('admin.categorie', compact('categories'));
    }
    public function index()
    {
        $categories = categorie::all();
        $categors = categorie::all()->take(6);
        $produits = produit::all()->take(6);
        return view('welcome', compact('categories', 'produits', 'categors'));
    }
    public function liste_produit_par_categorie($categoryId)
    {
        $categories = categorie::all();
        $categorie = categorie::find($categoryId);
        if ($categorie) {
            $produits = $categorie->produits; // Récupère tous les produits de cette catégorie
            return view('produitparcategorie', compact('produits', 'categories'));
            
        }
    
        return redirect()->back()->with('error', 'Catégorie non trouvée.');
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        
    $file= $request->file('imagecat');
    $extension = $file->getClientOriginalExtension();
    $filename = time().'.'.$extension;
    $path = 'public/images/';
    $file->move($path, $filename);

        $categorie = new categorie();
        $categorie->nom = $request->nom;
        $categorie->description = $request->description;
        $categorie->image = $path.$filename;
        $categorie->save();
        return back();
        
        // dd($categorie);
        

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Request $request)
    {
        $file= $request->file('imagecat');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $path = 'public/images/';
        $file->move($path, $filename);
        //
        $categorie = categorie::find($id);
        $categorie->nom = $request->nom;
        $categorie->description = $request->description;
        $categorie->image = $path.$filename;

        $categorie->update();
        return back();
        dd($categorie);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, categorie $categorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $categorie = categorie::find($id);
        $categorie->delete();
        return back();
        // dd($categorie);
    }
}
