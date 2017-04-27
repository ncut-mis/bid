<?php

use Illuminate\Database\Seeder;
use App\StoreValue;

class StoreValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('storevalues')->delete();
        StoreValue::create([   
        'user_id' => '1',
        'datetime'=> '2000/02/02',
        'amount of money'=> 300,
        'payment method'=> '信用卡',
        'bank name/code'=> '第一銀行',
        ]);
    }
}
