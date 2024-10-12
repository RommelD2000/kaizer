<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('description');
            $table->float('prix');
            // $table->integer('quantite');
            $table->string('image');
            $table->string('marque');
            $table->boolean('featured')->default(false); // Ajout d'un champ pour la mise en vedette
            $table->foreignId('categorie_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('cascade'); // Optionnel : définit le comportement lors de la suppression
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
