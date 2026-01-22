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
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('email');
            $table->string('telephone');
            $table->date('date_naissance');
            $table->string('genre');
            $table->text('adresse');
            $table->string('niveau_etudes');
            $table->string('domaine_etudes');
            $table->string('situation_actuelle');
            $table->text('competences');
            $table->string('nom_projet')->nullable();
            $table->string('secteur_activite');
            $table->string('stade_projet');
            $table->text('projet_description');
            $table->text('besoins');
            $table->text('motivation');
            $table->text('attentes');
            $table->string('source');
            $table->string('cv_path');
            $table->string('business_plan_path')->nullable();
            $table->enum('statut', ['en_attente', 'accepte', 'refuse'])->default('en_attente');
            $table->text('commentaire_admin')->nullable();
            $table->boolean('newsletter')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscriptions');
    }
};
