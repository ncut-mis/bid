<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreValue extends Model
{
    //
    protected $table = 'storevalues';
    protected $fillable = [
        'user_id',
        'datetime',
        'amount of money',
        'payment method',
        'bank name/code',
    ];
}
