<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'description',
        'author',
        'genre',
        'rating', // nullable
        'is_finished', // nullable
        'finished_reading_date' // nullable
    ];
}
