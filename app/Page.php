<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'name',
        'data',
    ];

    protected $casts = [
        'data' => 'array'
    ];
}
