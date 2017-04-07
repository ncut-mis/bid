<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table = 'products';

  protected $fillable = [
'id','name','category','price','quantity','specification','Catalog'
  ];
  public function category(){
      return $this ->hasOne(category::class,'id','category')
  }
}
