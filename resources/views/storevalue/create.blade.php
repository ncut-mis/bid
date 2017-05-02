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
                <input type="hidden" name="user_id" class="form-control" value="{{$users->id}}" readonly="readonly">
            </div>
            <div class="form-group">
                <label>銀行名稱/代碼：</label>
                <input name="bank_name_code" class="form-control">
            </div>
            <div class="form-group">
                <label>儲值金額：</label><br>
                <input type="radio" name="amount_of_money" value="10">10<br>
                <input type="radio" name="amount_of_money" value="100">100<br>
                <input type="radio" name="amount_of_money" value="150">150<br>
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
