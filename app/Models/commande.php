<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commande extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'total', 
       
    ];

    public function produits()
       {
           return $this->belongsToMany(Produit::class, 'commande_produit')
                       ->withPivot('quantite'); // quantité dans le pivot
       }

       public function user()
       {
           return $this->belongsTo(User::class);
       }
}
