<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\productRequest;
use App\product;

class AdminproductsController extends Controller
{
   public function index()
    {
        $post=product::orderBy('created_at', 'DESC')->get();
        $data=['products'=>$post];
        return view('admin.products.index', $data);
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function edit($id)
    {
        $post=product::find($id);
        $data = ['products' => $post];

        return view('admin.products.edit', $data);
    }
    public function update(productRequest $request, $id)
    {
        $post=product::find($id);
        $post->update($request->all());

        return redirect()->route('admin.products.index');
    }
    public function store(productRequest $request)
    {
        product::create($request->all());
        return redirect()->route('admin.products.index');
    }
    public function destroy($id)
    {
        product::destroy($id);

        return redirect()->route('admin.products.index');
    }
}
