<?php

namespace App\Http\Controllers;

use App\StoreValue;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\storevalueRequest;


class StoreValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $post=StoreValue::where('user_id', '=', $id)->orderBy('created_at', 'DESC')->get();
        $data=['storevalues'=>$post];
        return view('storevalue.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
         $users = User::find($id);
         $data = ['users' => $users];
        return view('storevalue.create',$data);
        //return view('storevalue.create');
    }
    public function store(storevalueRequest $request,$id)
    {
        StoreValue::create($request->all());
        $user_id = User::find($id);
        $sotre_id = StoreValue::max('id');
        $store_quantity = StoreValue::where('id','=',$sotre_id)->value('amount_of_money');
        $user_quantity = User::where('id',$user_id->id)->value('tokens_quantity');
        $total = $store_quantity/10 + $user_quantity;
        User::where('id',$user_id->id)->update(['tokens_quantity' => $total]);
        
        
        return redirect()->route('storevalue.index',$user_id);
    }
}
