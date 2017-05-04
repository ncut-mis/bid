<?php

use Illuminate\Database\Seeder;
use App\Bids;

class auctions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$now = date("Y-m-d");
       /*DB::table('auctions')->delete();*/
       Bids::create([
        	'product_id' => '1',
        	'start_date' => $now,
        	'end_date' => '2018-04-22',
        	'betting_style' => '1',
        	'maximum' => '1000',
        	'minimum' => '10',
        	'bid_function' => '開啟',
        	'quantity' => '0',
        	'situation' => '等待開標',
        	'winning_numbers' => '0',
        	]);
        Bids::create([
        	'product_id' => '1',
        	'start_date' => $now,
        	'end_date' => $now,
        	'betting_style' => '1',
        	'maximum' => '2000',
        	'minimum' => '100',
        	'bid_function' => '開啟',
        	'quantity' => '100',
        	'situation' => '等待開標',
        	'winning_numbers' => '0',
        	]);
         Bids::create([
        	'product_id' => '1',
        	'start_date' => $now,
        	'end_date' => $now,
        	'betting_style' => '1',
        	'maximum' => '1000',
        	'minimum' => '10',
        	'bid_function' => '開啟',
        	'quantity' => '1000',
        	'situation' => '等待開標',
        	'winning_numbers' => '0',
        	]);
         Bids::create([
        	'product_id' => '1',
        	'start_date' => $now,
        	'end_date' => $now,
        	'betting_style' => '1',
        	'maximum' => '1000',
        	'minimum' => '500',
        	'bid_function' => '開啟',
        	'quantity' => '450',
        	'situation' => '等待開標',
        	'winning_numbers' => '0',
        	]);
        Bids::create([
        	'product_id' => '1',
        	'start_date' => $now,
        	'end_date' => $now,
        	'betting_style' => '1',
        	'maximum' => '1000',
        	'minimum' => '500',
        	'bid_function' => '開啟',
        	'quantity' => '500',
        	'situation' => '等待開標',
        	'winning_numbers' => '0',
        	]);
         Bids::create([
        	'product_id' => '1',
        	'start_date' => $now,
        	'end_date' => $now,
        	'betting_style' => '1',
        	'maximum' => '1000',
        	'minimum' => '500',
        	'bid_function' => '開啟',
        	'quantity' => '300',
        	'situation' => '等待開標',
        	'winning_numbers' => '0',
        	]);
    }
}
