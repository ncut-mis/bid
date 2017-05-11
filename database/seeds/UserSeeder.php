<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
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
        'name' => '林楷宇',
        'email' => '123@mail.com',
        'password' => Hash::make('123456'),
        'gender' => '男',
        'birthday' => '1996/05/05',
        'address' => '台中市.......',
        'tokens_quantity' =>55,
        'phone_number' => '0987878787',
        'card_number' => '1234567890123456',
        'card_category' => 'Visa',
        ]);
    }
}
