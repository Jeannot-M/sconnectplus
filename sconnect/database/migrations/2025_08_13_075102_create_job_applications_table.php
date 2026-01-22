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
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            // Informations personnelles
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->date('birth_date')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            
            // Formation
            $table->string('education_level');
            $table->string('other_education')->nullable();
            $table->string('field_of_study')->nullable();
            $table->string('institution')->nullable();
            $table->year('graduation_year')->nullable();
            
            // Emploi souhaité
            $table->string('job_type'); // CDI, CDD, Stage, etc.
            $table->string('position_sought')->nullable();
            $table->text('motivation')->nullable();
            $table->decimal('salary_expectation', 10, 2)->nullable();
            $table->date('availability_date')->nullable();
            
            // Expérience
            $table->text('experience')->nullable();
            $table->integer('years_experience')->nullable();
            
            // Compétences
            $table->json('skills')->nullable();
            $table->json('languages')->nullable();
            $table->string('computer_level')->nullable();
            
            // Documents
            $table->string('cv_path')->nullable();
            $table->string('cover_letter_path')->nullable();
            $table->string('portfolio_path')->nullable();
            
            // Autres informations
            $table->boolean('terms_accepted')->default(false);
            $table->string('status')->default('pending'); // pending, reviewed, contacted, rejected
            $table->text('admin_notes')->nullable();
            
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
        Schema::dropIfExists('job_applications');
    }
};
