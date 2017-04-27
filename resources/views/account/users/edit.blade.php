@extends('account.layouts.master')

@section('title', '會員資料修改')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            會員資料修改 
        </h1>
    </div>
</div>
<!-- /.row -->
@include('account.layouts.partials.validation')
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <form action="/account/users/{{Auth::user()->id}}" method="POST" role="form">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <div class="form-group">
                <label>姓名：</label>
                <input name="name" class="form-control"  style="width:200px" value="{{Auth::user()->name}}">
            </div>
            <div class="form-group">
                <label>信箱：</label>
                <input name="email" class="form-control" style="width:200px" value="{{Auth::user()->email}}">
            </div>
            <div class="form-group">
                <label>性別：</label>
                <input name="gender" class="form-control" style="width:200px" value="{{Auth::user()->gender}}">
            </div>
            <div class="form-group">
                <label>生日：</label>
                <input  type="date" name="birthday" class="form-control" style="width:200px" value="{{Auth::user()->birthday}}">
            </div>
            <div class="form-group">
                <label>連絡電話：</label>
                <input name="phone_number" class="form-control" style="width:200px" value="{{Auth::user()->phone_number}}">
            </div>
            <div class="form-group">
                <label>地址：</label>
                <input name="address" class="form-control" style="width:200px" value="{{Auth::user()->address}}">
            </div>
            <div class="form-group">
                <label>信用卡號：</label>
                <input name="card_number" class="form-control" style="width:200px" value="{{Auth::user()->card_number}}">
            </div>
            <div class="form-group">
                <label>信用卡類別：</label>
                <input name="card_category" class="form-control" style="width:200px" value="{{Auth::user()->card_category}}">
            </div>
            <div class="form-group">
                <label>代幣數量：</label>
                <label>{{Auth::user()->tokens_quantity}}</label>
            </div>
            <div class="text-left">
                <button type="submit" class="btn btn-success" >更新</button>   
            </div>

        </form>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

    </div>
</div>
<!-- /.row -->
@endsection
