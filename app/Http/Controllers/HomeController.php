<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    public function Welcome(){
        $product = DB::table('products')->get();
        return view('welcome',['product'=>$product]);
    }
    public function type(){
        $type = DB::table('types')->get();
        return view('edit.edit',['type'=>$type]);
    }
    public function addproduct(){
        return view('add.addproduct');
    } 
    public function Home(){
        return view('home.home');
    }
    public function Shoppingcart(){
        return view('shoppingcart.shoppingcart');
    }
    public function Account(){
        return view('account.users.index');
    }
    public function Product(){
        return view('product.product');
    }
    public function C(){
        return view('product.3c');
    }
    public function Electricequipment(){
        return view('product.electric equipment');
    }
    public function System(){
        return view('product.product');
    }
    public function Activity(){
        return view('notice.activity');
    }
}
