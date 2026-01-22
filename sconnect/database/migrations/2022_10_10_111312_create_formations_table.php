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
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('options');
            $table->string('noms');
            $table->string('postnom');
            $table->string('prenom');
            $table->string('naissance');
            $table->string('sexe');
            $table->string('etat_civil')->nullable();
            $table->string('nationalite');
            $table->string('payes');
            $table->string('etude');
            $table->string('profession');
            $table->string('adresse')->nullable();
            $table->string('phone');
            $table->string('email');
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
        Schema::dropIfExists('formations');
    }
};
