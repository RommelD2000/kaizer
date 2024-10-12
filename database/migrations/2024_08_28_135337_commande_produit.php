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
        //
        Schema::create('commande_produit', function (Blueprint $table) {
            $table->id(); // ID pour la table pivot (facultatif)
            $table->foreignId('commande_id')->constrained()->onDelete('cascade');
            $table->foreignId('produit_id')->constrained()->onDelete('cascade');
            $table->integer('quantite')->default(1); // Par défaut, la quantité est 1
            $table->timestamps(); // Pour garder une trace des dates de création et de mise à jour
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('commande_produit');
    }
};


