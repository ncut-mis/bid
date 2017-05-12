<?php

use Illuminate\Database\Seeder;
use App\User;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('users')->delete();
        User::create([
        	'name' => '111',
        	'email' => '111@gmail.com',
        	'password' => Hash::make('123456'),
        	'gender' => '女',
        	'birthday' => '2017-04-12',
        	'address' => '15153',
        	'tokens_quantity' => 0,
        	'phone_number' => '5531',
        	]);
       User::create([
        	'name' => '123',
        	'email' => '123@gmail.com',
        	'password' => Hash::make('123456'),
        	'gender' => '男',
        	'birthday' => '2017-05-19',
        	'address' => '123123',
        	'tokens_quantity' => 0,
        	'phone_number' => '0912458167',
        	]);
    }
}
