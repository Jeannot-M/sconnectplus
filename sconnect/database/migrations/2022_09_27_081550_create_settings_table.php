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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable()->default(null);
            $table->string('text_top')->nullable()->default(null);
            $table->string('phone')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->string('facebook')->nullable()->default(null);
            $table->string('twitter')->nullable()->default(null);
            $table->string('instagram')->nullable()->default(null);
            $table->string('linkedin')->nullable()->default(null);
            $table->string('assistance')->nullable()->default("Nous vous assistons 24h/24 et 7j/7. Pour toute autre preoccupation, veuillez lire notre FAQ.");
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
        Schema::dropIfExists('settings');
    }
};
