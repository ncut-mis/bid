<?php

namespace App\Http\Controllers;

use App\StoreValue;
use App\User;
use Mail;
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
        //顯示儲值紀錄頁面
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
        //顯示儲值頁面
         $users = User::find($id);
         $data = ['users' => $users];
         $card_number = User::select('card_number')->where('id','=',$id)->get();
        
        return view('storevalue.create',compact('users',$card_number),$data);
        //return view('storevalue.create');
    }
    public function store(storevalueRequest $request,$id)
    {
        StoreValue::create($request->all());
        //儲值後，會員資料表內代幣數量增加
        $user_id = User::find($id);
        $sotre_id = StoreValue::max('id');
        $store_quantity = StoreValue::where('id','=',$sotre_id)
                                    ->value('amount_of_money');
        $user_quantity = User::where('id',$user_id->id)
                             ->value('tokens_quantity');
        $total = $store_quantity/10 + $user_quantity;
        User::where('id',$user_id->id)->update(['tokens_quantity' => $total]);
        
        //寄送email
        $data = ['name' => 'test'];
        Mail::send('email.store_successful', $data, function($message) {
            $message->to('test20170609@gmail.com') 
                    ->subject('儲值成功');
        });
        return redirect()->route('storevalue.index',$user_id);
    }
}
