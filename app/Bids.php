<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Bids as Authenticatable;

class Bids extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'auctions';

    protected $fillable = [
        'id',
        'product_id',
        'start_date',
        'end_date',
        'betting_style',
        'maximum',
        'minimum',
        'bid_function',
        'quantity',
        'remember_token',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id',
    ];

    /**
     * 取得該使用者的所有任務。
     */
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}



