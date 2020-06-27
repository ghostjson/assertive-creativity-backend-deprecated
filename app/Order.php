<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['order','buyer_id', 'seller_id', 'payment_id'];
}
