<?php

use Illuminate\Database\Seeder;
use App\userbidserialnumber;

class serialnumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        userbidserialnumber::create([
        	'user_id' => '1',
        	'auction_id' => '2' ,
        	'serial_number' => '1',
        	]);
        userbidserialnumber::create([
        	'user_id' => '1' ,
        	'auction_id' => '3' ,
        	'serial_number' => '1',
        	]);
        userbidserialnumber::create([
        	'user_id' => '2',
        	'auction_id' => '3',
        	'serial_number' => '2',
        	]);      
        userbidserialnumber::create([
        	'user_id' => '1',
        	'auction_id' => '4',
        	'serial_number' => '1',
        	]);
        userbidserialnumber::create([
        	'user_id' => '1',
        	'auction_id' => '5',
        	'serial_number' => '1',
        	]);
        userbidserialnumber::create([
        	'user_id' => '1',
        	'auction_id' => '6',
        	'serial_number' => '1',
        	]);
        userbidserialnumber::create([
        	'user_id' => '2',
        	'auction_id' => '6',
        	'serial_number' => '2',
        	]);
    }
}
