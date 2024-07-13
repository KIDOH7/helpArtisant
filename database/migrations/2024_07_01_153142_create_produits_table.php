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
            $table->unsignedBigInteger('artisan_id');
            $table->string('nom_produit');
            $table->text('description_produit');
            $table->decimal('prix_produit', 8, 2);
            $table->text('images_produit')->nullable();
            $table->text('videos_produit')->nullable();
            $table->timestamps();
    
            $table->foreign('artisan_id')->references('id')->on('artisans')->onDelete('cascade');
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
