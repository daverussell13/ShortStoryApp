<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    static public $genreList = [
        'Horror',
        'Thriller',
        'Romance',
        'Comedy',
        'Adventure',
        'Scifi',
        'Drama'
    ];

    protected $guarded = ['id'];

    public $timestamps = false;
}
