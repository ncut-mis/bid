<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\productRequest;
use App\Http\Requests\auctionRequest;
use App\Product;
use App\Auction;

class AdminauctionsController extends Controller
{
   public function index()
    {
        $post=Auction::orderBy('id', 'ASC')->get();
        $data=['auctions'=>$post];
        return view('admin.auctions.index', $data);
    }

    public function create($id)
    {
         $products = product::find($id);
         $data = ['products' => $products];
        return view('admin.auctions.create',$data);
    }

    public function edit($id)
    {
        $post=Auction::find($id);
        $data = ['auctions' => $post];
        return view('admin.auctions.edit', $data);
    }
    public function update(auctionRequest $request, $id)
    {
        $post=Auction::find($id);
        $post->update($request->all());
        return redirect()->route('admin.auctions.index');
    }
    public function store(auctionRequest $request,$id)
    {
        Auction::create($request->all());
        product::find($id)->decrement('quantity');
        return redirect()->route('admin.auctions.index');
    }
    public function destroy($id)
    {
        Auction::destroy($id);

        return redirect()->route('admin.auctions.index');
    }
}
