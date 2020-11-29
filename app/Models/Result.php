<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static orderBy(string $string, string $string1)
 */
class Result extends Model
{
    use HasFactory;

    protected $fillable = ['username', 'prenom', 'department'];

    protected $casts = ['id' => 'integer'];
}
