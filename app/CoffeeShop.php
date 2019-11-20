<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoffeeShop extends Model
{
    protected $table = 'coffeeshop';

    protected $fillable = ['name', 'address', 'contact', 'description', 'thumbnail'];
}
