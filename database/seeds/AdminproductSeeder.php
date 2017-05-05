<?php

use Illuminate\Database\Seeder;
use App\Product;
class AdminproductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();
        Product::create([   
        'name' => 'Apple iPhone 7 Plus 128GB',
        'category'=> '3C用品',
        'specification'=> '機身顏色：黑',
        'catalog'=> 'Apple iPhone 7 Plus 128GB.jpg',
        'quantity'=> '10',
        'price'=> '29212',
        'cost'=> '10000',
        ]);
    }
}
