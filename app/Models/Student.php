<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $data)
 * @method static orderBy(string $string, string $string1)
 */
class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'prenom',
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
        'matricule',
        'email',
        'Department',
        'Depart'
    ];

    protected $casts = ['id' => 'integer'];



}
