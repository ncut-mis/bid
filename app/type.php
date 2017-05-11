<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    protected $table = 'types';
    protected $fillbale = [
        'type_no','type_name'
    ];
}
