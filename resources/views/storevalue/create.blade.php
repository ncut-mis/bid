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
        <form action="/admin/products" method="POST" role="form">
            {{ csrf_field() }}

            <div class="form-group">
                <label>卡號：</label>
                <input name="card_number" class="form-control">
            </div>
            <div class="form-group">
                <label>安全碼：</label>
                <input name="card_number_safe" class="form-control">
            </div>
            <div class="form-group">
                <label>銀行名稱/代碼：</label>
                <input name="bank name/code" class="form-control">
            </div>
            <div class="form-group">
                <label>儲值金額：</label>
                <input name="amount of money" class="form-control">
            </div>
            <div class="form-group">
                <label>付款方式：</label>
                <input name="payment method" class="form-control">
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
