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
        Schema::create('interventions', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('email');
            $table->string('telephone');
            $table->string('profession');
            $table->string('entreprise');
            $table->string('site_web')->nullable();
            $table->string('secteur_activite');
            $table->string('experience');
            $table->text('bio');
            $table->string('photo_path');
            $table->string('titre_intervention');
            $table->string('thematiques');
            $table->text('description_intervention');
            $table->string('format_prefere');
            $table->text('disponibilite');
            $table->text('realisations');
            $table->text('defis');
            $table->text('impact');
            $table->text('interventions_precedentes')->nullable();
            $table->string('supports');
            $table->text('precisions_supports')->nullable();
            $table->string('materiel_supplementaire_path')->nullable();
            $table->enum('statut', ['en_attente', 'accepte', 'refuse'])->default('en_attente');
            $table->text('commentaire_admin')->nullable();
            $table->boolean('droit_image')->default(true);
            $table->boolean('newsletter')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interventions');
    }
};
