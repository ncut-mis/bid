<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class WishlistDashboardController extends Controller
{
    public function index()
    {
        return view('wishlist.dashboard.index');
    }
}
