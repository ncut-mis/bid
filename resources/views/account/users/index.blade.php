@extends('account.layouts.master')

@section('title', '會員中心')

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
        <div class="form-group">
                <label>姓名：</label>
               <label >{{Auth::user()->name}}</label>
            </div>
            <div class="form-group">
                <label>信箱：</label>
                <label >{{Auth::user()->email}}</label>
            </div>
            <div class="form-group">
                <label>性別：</label>
                <label >{{Auth::user()->gender}}</label>
            </div>
            <div class="form-group">
                <label>生日：</label>
                <label >{{Auth::user()->birthday}}</label>
            </div>
            <div class="form-group">
                <label>連絡電話：</label>
                <label >{{Auth::user()->phone_number}}</label>
            </div>
            <div class="form-group">
                <label>地址：</label>
                <label >{{Auth::user()->address}}</label>
            </div>
            <div class="form-group">
                <label>信用類別：</label>
                <label >{{Auth::user()->card_category}}</label>
            </div>
            <div class="form-group">
                <label>信用卡號：</label>
                <label >{{Auth::user()->phone_number}}</label>
            </div>            
            <div class="form-group">
                <label>代幣數量：</label>
                <label >{{Auth::user()->tokens_quantity}}</label>
            </div>
        <a href="{{ route('account.users.edit', Auth::user()->id) }}" class="btn btn-success">更改</a>  
    </div>
</div>
<!-- /.row -->
@endsection
