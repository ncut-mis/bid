<?php

use Illuminate\Database\Seeder;
Use App\userbidauctions;

class userbidauctionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('userbidauctions')->delete();
        userbidauctions::create([
        	'user_id' => '1',
        	'auction_id' => '2',
        	'bid_quantity' => '100',
        	]);
        userbidauctions::create([
        	'user_id' => '1',
        	'auction_id' => '3',
        	'bid_quantity' => '300',
        	]);
        userbidauctions::create([
        	'user_id' => '2',
        	'auction_id' => '3',
        	'bid_quantity' => '700',
        	]);      
       userbidauctions::create([
        	'user_id' => '1',
        	'auction_id' => '4',
        	'bid_quantity' => '450',
        	]);
        userbidauctions::create([
        	'user_id' => '1',
        	'auction_id' => '5',
        	'bid_quantity' => '500',
        	]);
       userbidauctions::create([
        	'user_id' => '2',
        	'auction_id' => '6',
        	'bid_quantity' => '200',
        	]);
        userbidauctions::create([
        	'user_id' => '1',
        	'auction_id' => '6',
        	'bid_quantity' => '100',
        	]);        
    }
}
