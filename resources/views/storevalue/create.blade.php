@extends('storevalue.layouts.master')

@section('title', '儲值')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            儲值
        </h1>
    </div>
</div>
<!-- /.row -->
@include('storevalue.layouts.partials.validation')
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <form action="/store/storevalue/{{ Auth::user()->id }}" method="POST" role="form">
            {{ csrf_field() }}

            <div class="form-group">
                <input type="hidden" name="user_id" class="form-control" value="{{$users->id}}">
            </div>
            <div class="form-group">
                <label>銀行名稱：</label>
                <input type="text" name="bank_name_code">
            </div>
            <div class="form-group">
                <label>信用卡卡號：</label>
                <select name="card_number" name="card_number">
                    <option value="{{$users->card_number}}">{{$users->card_number}}</option>
                </select>
            </div>
            <div class="form-group">
                <label>有效期限：</label>
                <input type="month">
            </div>
            <div class="form-group">
                <label>卡片背面後三碼：</label>
                <input  maxlength="3">
            </div>
            <div class="form-group">
                <label>儲值金額：</label><br>
                <input type="radio" name="amount_of_money" value="150">150<br>
                <input type="radio" name="amount_of_money" value="200">200<br>
                <input type="radio" name="amount_of_money" value="1000">1000<br>
            </div>
            <div class="form-group">
                <label>付款方式：</label><br>
                <input type="radio" name="payment_method" value="信用卡">信用卡
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-success">完成</button>
            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

        </form>
    </div>
</div>
<!-- /.row -->
@endsection
