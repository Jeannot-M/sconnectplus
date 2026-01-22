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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("from_id"); // de
            $table->unsignedBigInteger("to_id"); // vers
            $table->foreign('from_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('to_id')->references('id')->on('users')->cascadeOnDelete();
            $table->text('content')->nullable(); //message
            $table->string('files')->nullable(); // Image et fichier
            $table->dateTime('read_at')->nullable();
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
        Schema::dropIfExists('messages');
    }
};
