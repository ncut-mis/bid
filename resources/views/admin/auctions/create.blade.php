@extends('admin.layouts.master')

@section('title', '新增商品')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            新增商品 <small>請輸入商品內容</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 商品管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->
@include('admin.layouts.partials.validation')
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <form action="/admin/auctions/{{$products->id}}" method="POST" role="form">
            {{ csrf_field() }}
            <div class="form-group">
                <label>商品編號：</label>
　              <input name="product_id" class="form-control" style="width:200px" readonly="readonly" value=" {{ $products->id }}">
            </div>
             <div class="form-group">
                <label>開始日期：</label>
                <input  type="date" name="start_date" class="form-control" style="width:200px">
            </div>
             <div class="form-group">
                <label>結束日期：</label>
                <input  type="date" name="end_date" class="form-control" style="width:200px">
            </div>
             <div class="form-group">
                <label>投注型態：</label>
                <select name="bid_type" class="form-control" style="width:200px">
                    <option value="單次限定">單次限定</option>
                    <option value="允許多次">允許多次</option>
                </select>
            </div>
             <div class="form-group">
                <label>最小投注量：</label>
                <input name="min_bids" class="form-control" placeholder="請輸入最小投注量" style="width:200px">
            </div>
            <div class="form-group">
                <label>最大投注量：</label>
                <input name="max_bids" class="form-control" placeholder="請輸入最大投注量" style="width:200px">
            </div>
            <div class="form-group">
                <label>數量：</label>
                <input name="quantity" class="form-control" value="1" readonly="readonly" style="width:200px">
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-success">新增</button>
            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

        </form>
    </div>
</div>
<!-- /.row -->
@endsection
