<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\produit;
use Illuminate\Support\Facades\DB;


class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        produit::truncate();

        DB::table('produits')->insert([
            [
                'nom' => 'Chaise Ergonomique',
                'description' => 'Une chaise confortable pour le bureau.',
                'prix' => 89.99,
                // 'quantite' => 30,
                'image' => 'chaise_ergonomique.jpg',
                'marque' => 'Marque A',
                'categorie_id' => 1,
            ],
            [
                'nom' => 'Lampe de Bureau',
                'description' => 'Lampe LED réglable pour un éclairage optimal.',
                'prix' => 45.50,
                // 'quantite' => 20,
                'image' => 'lampe_bureau.jpg',
                'marque' => 'Marque B',
                'categorie_id' => 1,
            ],
            [
                'nom' => 'Clavier Mécanique',
                'description' => 'Clavier avec des touches rétroéclairées.',
                'prix' => 75.00,
                // 'quantite' => 15,
                'image' => 'clavier_mecanique.jpg',
                'marque' => 'Marque C',
                'categorie_id' => 2,
            ],
            [
                'nom' => 'Souris Sans Fil',
                'description' => "Souris ergonomique sans fil pour un confort maximal.",
                'prix' => 35.00,
                // 'quantite' => 50,
                'image' => 'souris_sans_fil.jpg',
                'marque' => 'Marque D',
                'categorie_id' => 2,
            ],
            [
                'nom' => "Sac à Dos d'École",
                'description' => "Sac à dos spacieux avec plusieurs compartiments.",
                'prix' => 49.99,
                // 'quantite' => 25,
                'image' => "sac_a_dos_ecole.jpg",
                'marque' => "Marque E",
                'categorie_id' => 3,
            ],
            [
                'nom' => "Cahier de Notes",
                'description' => "Cahier à spirale avec des pages lignées.",
                'prix' => 3.50,
                // 'quantite' => 100,
                'image' => "cahier_notes.jpg",
                'marque' => "Marque F",
                'categorie_id' => 3,
            ],
        ]);
    }
    }

