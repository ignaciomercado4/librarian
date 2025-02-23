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
        'is_finished', // nullable
        'rating', // nullable
        'finished_reading_date' // nullable
    ];
}
