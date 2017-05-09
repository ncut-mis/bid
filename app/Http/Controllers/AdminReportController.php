<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ReportRequest;
use App\Report;

class AdminReportController extends Controller
{
    public function index()
    {
        return view('admin.report.index');
    }
    public function create()
    {
        return view('admin.report.create');
    }

}
