<?php

namespace App\Http\Controllers;

use App\Models\produit;
use App\Models\categorie;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $produits = produit::all();
        $categories = categorie::all();

        return view('admin.produit', compact('produits', 'categories'));
        // dd($produits);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $file= $request->file('imagecat');
    $extension = $file->getClientOriginalExtension();
    $filename = time().'.'.$extension;
    $path = 'public/images/';
    $file->move($path, $filename);

        $produit = new produit();
        $produit->nom = $request->nom;
        $produit->description = $request->description;
        $produit->prix = $request->prix;
        $produit->marque = $request->marque;
        $produit->categorie_id = $request->categorie;
        $produit->image = $path.$filename;
        $produit->save();
        return back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function addBooktoCart($id)
    {
        //
        $produit = produit::findOrFail($id);
        // dd($produit);
        $cart = session()->get('cart', []);
        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
        }else{
            $cart[$id] = [
                "name" => $produit->nom,
                "quantity" => 1,
                "price" => $produit->prix,
                "image" =>$produit->image,
                "id" => $produit->id
            ];
        }
        // dd($cart);
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Produit ajouté au panier');
    }

    /**
     * Display the specified resource.
     */
    public function shopping_cart(produit $produit)
    {
        //
        $produit = produit::all();
        $categories = categorie::all();
        return view('shopping', compact('produit', 'categories'));
    }
    public function delete_produit_shopping_cart(Request $request)
    {
        //
        if($request->id){
            $cart = session()->get('cart');
            if(isset($cart[$request->id])){
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Article supprimé avec succès');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Request $request)
    {
        //
        $file= $request->file('imagecat');
    $extension = $file->getClientOriginalExtension();
    $filename = time().'.'.$extension;
    $path = 'public/images/';
    $file->move($path, $filename);

        $produit = produit::find($id);
        // dd($produit);
        $produit->nom = $request->nom;
        $produit->description = $request->description;
        $produit->prix = $request->prix;
        $produit->marque = $request->marque;
        $produit->categorie_id = $request->categorie;
        $produit->image = $path.$filename;
        // dd($produit);
        $produit->update();
        return back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function info_produit($id)
    {
        //

        $categories = categorie::all();
        $categors = categorie::all()->take(6);
        // $produits = produit::all()->take(6);


        $product = Produit::with('categorie')->find($id);
        // dd($product);
        return view('infoproduit', compact('categories', 'product', 'categors'));

        // return view('infoproduit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $produit = produit::find($id);
        // dd($produit);
        $produit->delete();
        return back();
    }
}
