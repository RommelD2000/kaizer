<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    use HasFactory;

    public function categorie() {
        return $this->belongsTo(Categorie::class);
    }


    public function commandes()
       {
           return $this->belongsToMany(Commande::class, 'commande_produit')
                       ->withPivot('quantite'); // quantité dans la table pivot
       }
}
