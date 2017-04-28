<?php

use Illuminate\Database\Seeder;
use App\StoreValue;

class storeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('storevalues')->delete();
        StoreValue::create([   
        'user_id' => '1',
        'datetime'=> '2000/02/02',
        'amount_of_money'=> 300,
        'payment_method'=> '信用卡',
        'bank_name_code'=> '第一銀行',
        ]);
    }
}
