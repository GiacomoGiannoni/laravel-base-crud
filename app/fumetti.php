<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fumetti extends Model
{
    protected $fillable = [
        'title',
        'author',
        'release_date',
        'pages',
    ];
}