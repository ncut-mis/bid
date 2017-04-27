<?php

namespace App\Http\Controllers;

use App\StoreValue;
use App\User;
use Illuminate\Http\Request;

class StoreValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $post=StoreValue::orderBy('created_at', 'DESC')->get();
        $data=['storevalues'=>$post];
        return view('storevalue.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $StoreValue = storevalue::all(['user_id']);
        return view('storevalue.create', compact('storevalues',$StoreValue));
    }
}
