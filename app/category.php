<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'categories';
    protected $filllable = ['name'];
    public function product(){
        return $this -> hasMany(Product::class,'category','id');
    }
}
