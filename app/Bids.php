<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bids extends Model
{
    protected $table = 'auctions';

    protected $fillable = [
        'id',
        'product_id',
        'start_date',
        'end_date',
        'betting_style',
        'maximun',
        'minimun',
        'bid_function',
        'quantity',
        'situation',
        'winning_numbers',
    ];
}
