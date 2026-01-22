<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;
    
    /**
     * Les attributs qui sont assignables en masse.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'birth_date',
        'address',
        'city',
        'country',
        'education_level',
        'other_education',
        'field_of_study',
        'institution',
        'graduation_year',
        'job_type',
        'position_sought',
        'motivation',
        'salary_expectation',
        'availability_date',
        'experience',
        'years_experience',
        'skills',
        'languages',
        'computer_level',
        'cv_path',
        'cover_letter_path',
        'portfolio_path',
        'terms_accepted',
        'status',
    ];
    
    /**
     * Les attributs qui doivent être castés.
     *
     * @var array
     */
    protected $casts = [
        'birth_date' => 'date',
        'availability_date' => 'date',
        'skills' => 'array',
        'languages' => 'array',
        'terms_accepted' => 'boolean',
        'graduation_year' => 'integer',
        'years_experience' => 'integer',
        'salary_expectation' => 'decimal:2',
    ];
}
