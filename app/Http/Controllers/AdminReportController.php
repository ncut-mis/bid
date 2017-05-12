<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ReportRequest;
use App\Report;
use App\Http\Requests\CategoryRequest;
use App\category;
use App\Http\Requests\productsRequest;
use App\Porduct;


class AdminReportController extends Controller
{
    public function index()
    {
        return view('admin.report.index');
    }
    public function create()
    {


    	
        return Redirect::route('admin.report.report');
    }

}
