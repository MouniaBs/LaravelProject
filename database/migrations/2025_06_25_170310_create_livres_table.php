<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
     {
    Schema::create('livres', function (Blueprint $table) {
        $table->id();
        $table->string('titre');
        $table->string('auteur');
        $table->year('annee');
        $table->text('resume');
        $table->timestamps(); // Ajoute created_at et updated_at
    });
     }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livres');
    }
};
