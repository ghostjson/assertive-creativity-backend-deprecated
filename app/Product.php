<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'category_id', 'features', 'description','stock', 'sales', 'image', 'seller_id'];
}
