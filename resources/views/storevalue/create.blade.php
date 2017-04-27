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
        <form action="/store/storevalue/create" method="POST" role="form">
            {{ csrf_field() }}

            <div class="form-group">
                <label>使用者代碼：</label>
                <input name="user_id" class="form-control">
            </div>
            <div class="form-group">
                <label>儲值日期</label>
                <input name="datetime" class="form-control">
            </div>
            <div class="form-group">
                <label>銀行名稱/代碼：</label>
                <input name="bank_name_code" class="form-control">
            </div>
            <div class="form-group">
                <label>儲值金額：</label>
                <input name="amount_of_money" class="form-control">
            </div>
            <div class="form-group">
                <label>付款方式：</label>
                <input name="payment_method" class="form-control">
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
