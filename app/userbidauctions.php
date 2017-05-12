<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userbidauctions extends Model
{
    protected $table = 'userbidauctions';

    protected $fillable = [
        'id',
        'user_id',
        'auction_id',
        'bid_quantity',
    ];
}
