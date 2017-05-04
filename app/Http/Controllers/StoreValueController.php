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
        $user_id=User::find($id);
        $post1=StoreValue::create($request->all());
        $post=StoreValue::where('id',$post1)->value('amount_of_money');
        User::where('id',$id)->increment('tokens_quantity',$post/10);
        return redirect()->route('storevalue.index',$user_id);
    }
}
