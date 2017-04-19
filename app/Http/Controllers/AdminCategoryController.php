<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CategoryRequest;
use App\Category;

class AdminCategoryController extends Controller
{
   public function index()
    {
        $post=Category::orderBy('created_at', 'DESC')->get();
        $data=['categories'=>$post];
        return view('admin.categories.index', $data);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function edit($id)
    {
        $post=Category::find($id);
        $data = ['post' => $post];

        return view('admin.categories.edit', $data);
    }
    public function update(CategoryRequest $request, $id)
    {
        $post=Category::find($id);
        $post->update($request->all());

        return redirect()->route('admin.categories.index');
    }
    public function store(CategoryRequest $request)
    {
        Category::create($request->all());
        return redirect()->route('admin.categories.index');
    }
    public function destroy($id)
    {
        Category::destroy($id);

        return redirect()->route('admin.categories.index');
    }
}
