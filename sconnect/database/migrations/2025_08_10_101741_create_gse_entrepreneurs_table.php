<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gse_entrepreneurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('telephone');
            $table->string('entreprise');
            $table->string('poste');
            $table->string('pays');
            $table->string('ville');
            $table->string('site_web')->nullable();
            $table->string('secteur_activite');
            $table->string('stade_projet');
            $table->text('description_projet');
            $table->boolean('besoin_financement')->default(false);
            $table->string('montant_recherche')->nullable();
            $table->text('objectifs_participation');
            $table->string('piece_identite');
            $table->boolean('accepte_conditions')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gse_entrepreneurs');
    }
};
