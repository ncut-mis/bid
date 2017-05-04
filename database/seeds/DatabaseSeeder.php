<?php

use Illuminate\Database\Seeder;
use DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(auctions::class);
        $this->call(users::class);
        $this->call(serialnumberSeeder::class);
        $this->call(userbidauctionsSeeder::class);
    }
}


