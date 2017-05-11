<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wishlist;
use App\User;
use DB;

class WishlistController extends Controller
{
    public function index($id)
    {
        $post = Wishlist::where('user_id', '=', $id)->orderBy('created_at', 'DESC')->get();
        $data = ['wishlist'=>$post];
        return view('wishlist.index', $data);
    }
}
