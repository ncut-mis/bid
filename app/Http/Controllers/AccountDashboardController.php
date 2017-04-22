<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AccountDashboardController extends Controller
{
    public function index()
    {
        return view('account.dashboard.index');
    }
}
