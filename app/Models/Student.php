<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'renom',
        'sexe',
        'birthdays',
        'nationality',
        'phoneNumber',
        'adress',
        'ville',
        'school',
        'province',
        'codeExetat',
        'option',
        'annee',
        'pourcent',
        'Department',
        'Depart'
    ];

    protected $casts = ['id' => 'integer'];

}
