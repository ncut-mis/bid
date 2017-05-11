<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    protected $table = 'auctions';

    protected $fillable = [
        'id',
        'product_id',
        'start_date',
        'end_date',
        'bid_type',
        'min_bids',
        'max_bids',
        'quantity',
    ];
}