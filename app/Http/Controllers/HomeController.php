<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    public function Welcome(){
        return view('welcome');
    }
    public function Home(){
        return view('home.home');
    }
    public function Shoppingcart(){
        return view('shoppingcart.shoppingcart');
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
