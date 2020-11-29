<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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


    public function result()
    {
        return $this->belongsTo(Result::class);
    }

}
