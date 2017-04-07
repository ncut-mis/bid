<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Productcontroller extends Controller
{
       protected function validator(array $data)
    {
        return Validator::make($data, [
            'id' => 'required|max:255',
            'name' => 'required|max:255',
            'category' => 'required|max:255',
            'quantity' => 'required|max:255',
            'price' => 'required|max:255',
            'cost' => 'required|max:255',
            'specification' => 'required|max:255',
            'catelog' => 'required|max:255',
        ]);
    }
/*
     protected function create(array $data)
    {
        return product::create([
            'id' => $data['id'],
            'name' => $data['name'],
            'category' => ($data['category']),
            'quantity' => $data['quantity'],
            'price' => $data['price'],
            'cost' => $data['cost'],
            'specification' => $data['specification'],
            'Catalog' => $data['Catalog'],
        ]);
    }
*/

      public function store(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|max:255',
            'name' => 'required|max:255',
            'category' => 'required|max:255',
            'quantity' => 'required|max:255',
            'price' => 'required|max:255',
            'cost' => 'required|max:255',
            'specification' => 'required|max:255',
            'catelog' => 'required|max:255',
        ]);

        $request->create([
            'id' => $data['id'],
            'name' => $data['name'],
            'category' => ($data['category']),
            'quantity' => $data['quantity'],
            'price' => $data['price'],
            'cost' => $data['cost'],
            'specification' => $data['specification'],
            'Catalog' => $data['Catalog'],
        ]);

        return redirect('/add.addpruduct');
    }

}
