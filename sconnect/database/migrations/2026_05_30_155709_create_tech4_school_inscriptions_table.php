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
        Schema::create('tech4_school_inscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('child_name');
            $table->integer('child_age');
            $table->string('child_gender');
            $table->string('child_school');
            $table->string('parent_name');
            $table->string('parent_phone');
            $table->string('parent_whatsapp')->nullable();
            $table->string('session');
            $table->string('language');
            $table->text('comment')->nullable();
            $table->boolean('confirmed')->default(false);
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
        Schema::dropIfExists('tech4_school_inscriptions');
    }
};
