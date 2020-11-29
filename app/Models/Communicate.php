<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $communiquer)
 */
class Communicate extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content'];

    protected $casts = ['id' => 'integer'];
}
