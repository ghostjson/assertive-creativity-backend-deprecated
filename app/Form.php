<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed name
 * @property mixed slug
 * @property mixed formData
 */
class Form extends Model
{
    protected $fillable = ['name', 'formData'];
}
