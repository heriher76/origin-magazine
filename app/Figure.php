<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Figure extends Model
{
    protected $table = 'figure';

    protected $fillable = ['name', 'address', 'contact', 'description', 'thumbnail'];
}
