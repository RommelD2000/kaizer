<?php

namespace App\Http\Controllers;

use App\Models\commande;
use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\categorie;
use App\Models\user;
use App\Mail\MailCommande;
use Illuminate\Support\Facades\Mail;



class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function commander(Request $request)
    {
        // dd($request);
        
        
        $userId = auth()->id();
        $commande = new commande();
        $commande->user_id = $userId;
        $commande->save();
        // dd($request);

        
        $validatedData = $request->validate([
            'nom_produits.*.nom_produit' => 'string',
            'nom_produits.*.quantite' => 'integer',
        ]);

        
 

        $produits = $validatedData['nom_produits'];
    
        $total = 0;
        foreach ($produits as $produit) {// dd($produit); // dd($produit['quantite']);
            
        
            $qte = $produit['quantite'];

           $prod = produit::all()->where('nom' , $produit['nom_produit']); //    dd($prod[4]);
        

        $prix_u = 0;
        $id = 0;
           foreach ($prod as $pro){
            // dd($pro);
            $prix_u = $pro['prix'];
            $id = $pro['id'];
           }
        //    dd($id);
        $total_par_produit =  $qte * $prix_u; //prix total par produit sur la carte    //    dd($prix_u);  // dd($total_par_produit);
            $commande->produits()->attach($id, ['quantite' => $qte]);
       
        
        $total  +=  $total_par_produit;
        }
        
        
        $commande->cout_total = $total;
        $commande->update();


        $validatedDataCustomer = $request->validate([
            'nom_client' => 'required|string|max:255',
            'telephone_client' => 'required|string|max:15',
        ]);

        $nom_cust= $validatedDataCustomer['nom_client'];
        $telephone_cust = $validatedDataCustomer['telephone_client'];
        Mail::to('ivanmbefosso@gmail.com')->send(new MailCommande($nom_cust, $telephone_cust));

        return redirect()->route('liste_commandes', ['userId' => $userId]);
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
    public function liste_commandes($userId)
    {
        //
        $categories = categorie::all();
        $commandes = Commande::with('produits')->where('user_id', $userId)->get();
        return view('client.liste_commandes', compact('categories', 'commandes'));
    }

    public function liste_commandes_combines()
    {
        //
        $commandes = Commande::with('produits')->get();
        // dd($commandes);
        return view('admin.liste_commandes_admin', compact( 'commandes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function valider($id)
    {
        //
        
        $cmde = commande::find($id);
        $cmde->statut = 'Validé';
        $cmde->update();
        return back()->with('success', 'Commande validée');
    }

    /**
     * Update the specified resource in storage.
     */
    public function liste_commandes_par_client($id)
    {
        //
        // $commandes_par_client = user::with('commandes')->where('role', 'client' )->get();
        // $commandes_par_client = Commande::with(['user', 'produits'])->where('role', 'client' )->get();
        // dd($commandes_par_client);
        $user = User::with(['commandes.produits'])->findOrFail($id);
        return view('admin.commandes_par_client', compact('user'));
        // dd($user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(commande $commande)
    {
        //
    }
}
