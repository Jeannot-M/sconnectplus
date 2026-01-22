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
        Schema::create('gse_investisseurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('telephone');
            $table->string('entreprise');
            $table->string('fonction');
            $table->string('pays');
            $table->string('ville');
            $table->text('secteurs_interet');
            $table->string('montant_investissement');
            $table->text('type_participation');
            $table->text('attentes')->nullable();
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
        Schema::dropIfExists('gse_investisseurs');
    }
};
