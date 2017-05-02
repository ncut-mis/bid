<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\useraccountRequest;
use App\User;

class AccountusersController extends Controller
{
     public function index()
    {
        $post=User::orderBy('created_at', 'DESC')->get();
        $data=['users'=>$post];
        return view('account.users.index', $data);
    }
    public function edit($id)
    {
        $post=User::find($id);
        $data = ['users' => $post];

        return view('account.users.edit', $data);
    }
    public function update(useraccountRequest $request, $id)
    {
        $post=User::find($id);
        $post->update($request->all());
        return redirect()->route('account.users.index');
    }
   
}
