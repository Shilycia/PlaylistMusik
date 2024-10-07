<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class playlist_lagu extends Model
{
    use HasFactory;
    protected $table = 'playlist_lagu';
    protected $fillable = [
        'playlist_id',
        'lagu_id',
    ];
}
