<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Productcontroller extends Controller
{
      public function index($id)
    {
        $data = ['id' => $id];

        return view('product.product', $data);
    }
}
