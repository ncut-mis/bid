<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userbidserialnumber extends Model
{
    protected $table = 'userbidserial_number';

    protected $fillable = [
        'id',
        'user_id',
        'auction_id',
        'serial_number',
        'YorN',
    ];

}