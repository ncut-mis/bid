@extends('account.layouts.master')

@section('title', '文章管理')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            會員資料
        </h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" style="text-align: center">
                <thead>
                    <tr>
                        <th width="30" style="text-align: center">姓名</th>
                        <th width="30" style="text-align: center">信箱</th>
                        <th width="100" style="text-align: center">性別</th>
                        <th width="100" style="text-align: center">生日</th>
                        <th width="100" style="text-align: center">連絡電話</th>
                        <th width="100" style="text-align: center">地址</th>
                        <th width="100" style="text-align: center">功能</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="vertical-align:middle"> {{ Auth::user()->name }}</td>
                        <td style="vertical-align:middle">{{ Auth::user()->email }}</td>
                        <td style="vertical-align:middle">{{ Auth::user()->gender }}</td>
                        <td style="vertical-align:middle">{{ Auth::user()->birthday }}</td>
                        <td style="vertical-align:middle">{{ Auth::user()->phone_number }}</td>
                        <td style="vertical-align:middle">{{ Auth::user()->address }}</td>
                        <td style="vertical-align:middle">
                                    <a href="{{ route('account.users.edit', Auth::user()->id) }}" class="btn btn-success">更改</a>  
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection
