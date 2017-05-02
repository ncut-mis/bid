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
        'amount_of_money',
        'payment_method',
        'bank_name_code',
    ];
}
