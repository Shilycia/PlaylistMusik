<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyanyi_genre extends Model
{
    use HasFactory;
    protected $fillable = [
        'penyanyi_id',
        'genre_id',
    ];
}
