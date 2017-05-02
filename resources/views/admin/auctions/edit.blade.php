@extends('admin.layouts.master')

@section('title', '編輯商品')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            編輯拍賣品 <small>編輯拍賣品內容</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 拍賣品管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->
@include('admin.layouts.partials.validation')
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <form action="/admin/auctions/{{$auctions->id}}" method="POST" role="form">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <div class="form-group">
                <label>商品編號：</label>
                <input name="product_id" class="form-control" value="{{$auctions->product_id}}" readonly="readonly">     
            </div>
             <div class="form-group">
                <label>開始日期：</label>
                <input  type="date" name="start_date" class="form-control" value="{{$auctions->start_date}}">
            </div>
             <div class="form-group">
                <label>結束日期：</label>
                <input  type="date" name="end_date" class="form-control" value="{{$auctions->end_date}}">
            </div>
             <div class="form-group">
                <label>投注型態：</label>
                <select name="bid_type" class="form-control">
                    <option value="單次限定">單次限定</option>
                    <option value="允許多次">允許多次</option>
                </select>
            </div>
             <div class="form-group">
                <label>最小投注量：</label>
                <input name="min_bids" class="form-control" value="{{$auctions->min_bids}}" >
            </div>
            <div class="form-group">
                <label>最大投注量：</label>
                <input name="max_bids" class="form-control" value="{{$auctions->max_bids}}">
            </div>
            <div class="form-group">
                <label>數量：</label>
                <input name="quantity" class="form-control" value="{{$auctions->quantity}}">
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-success">更新</button>
            </div>

        </form>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

    </div>
</div>
<!-- /.row -->
@endsection
