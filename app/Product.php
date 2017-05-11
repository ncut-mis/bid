<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'id',
        'name',
        'category',
        'specification',
        'catalog',
        'quantity',
        'price',
        'cost',
    ];
}