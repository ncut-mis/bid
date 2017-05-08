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
        'image',
        'quantity',
        'price',
        'cost',
    ];
     public function auctions(){
        return $this->hasMany(Auction::class);
    }
}