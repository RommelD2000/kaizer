<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\categorie;


class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        categorie::truncate();
        $categories = [
            [
                'nom' => 'Électronique',
                'description' => 'Tous les appareils odernes et des fonctionnalités avancées, ces appareils allient performance et esthétique, rendant la technologie accessible et attrayante pour tous.',
                'image' => 'images/electronique.jpg',
            ],
            [
                'nom' => 'Vêtements',
                'description' => 'Mode et accessoires. Des t-shirts décontractés aux robelier  sa créativité tout en restant à la mode, que ce soit au quotidien ou lors d\'occasions spéciales.',
                'image' => 'images/vetements.jpg',
            ],
            [
                'nom' => 'Maison',
                'description' => 'Articles pour la pace chaleureux et  aux luminaires design, chaque élément contribue à personnaliser notre environnement et à refléter notre style de vie.',
                'image' => 'images/maison.jpg',
            ],
            [
                'nom' => 'Jouets',
                'description' => 'Jouets pour enfants. Les articles jouets, comme les poupéest des heures de divertissement et de créativité à travers le jeu.',
                'image' => 'images/jouets.jpg',
            ],
            [
                'nom' => 'Sport',
                'description' => 'Équipements sportifs.',
                'image' => 'images/sport.jpg',
            ],
            [
                'nom' => 'Beauté',
                'description' => 'Produits de beauté et soins. Les artles équipements et les accessoires, sont conmance et le confort. Ils encouragent une vie active tout en offrant style et fonctionnalité pour chaque discipline.',
                'image' => 'images/beaute.jpg',
            ],
            [
                'nom' => 'Alimentation',
                'description' => "Nourriture et boissons.  Les articles d'alimentation, comme les fruits, légumes, c pour une alimentation équilibrée. Ils apportent nutriments et saveurs, contribuant à notre bien-être et notre énergie au quotidien.",
                'image' => 'images/alimentation.jpg',
            ],
            [
                'nom' => "Livres",
                'description' => "Livres de tous genres. Les articles de livres, allantnces et d'évasion. Ils stimulent l'imagination, enrichissent notre culture et nous transportent dans des univers variés et fascinants.",
                'image' => "images/livres.jpg",
            ],
        ];

        foreach ($categories as $category) {
            Categorie::create($category);
        }
    }
    }

