@extends('admin.layouts.master')

@section('title', '編輯商品')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            編輯商品 <small>編輯商品內容</small>
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
        <form action="/admin/products/{{$products->id}}" method="POST" role="form">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <div class="form-group">
                <label>商品名稱：</label>
                <input name="name" class="form-control" value="{{ $products->name }}" unique>
            </div>
             <div class="form-group">
                <label>商品類別：</label>
                <input name="category" class="form-control" value="{{ $products->category }}">
            </div>
             <div class="form-group">
                <label>商品規格：</label>
                <textarea name="specification" class="form-control" rows="10">{{ $products->specification }}</textarea>
            </div>
            <div class="form-group">
                <label>商品型錄：</label>
                <input type="file" class="form-control" name="catalog" value="{{ $products->catalog }}">
            </div>
            <div class="form-group">
                <label>商品圖片：</label>
                <input type="file" class="form-control" name="image" value="{{ $products->image }}">
            </div>
             <div class="form-group">
                <label>商品數量：</label>
                <input name="quantity" class="form-control" value="{{ $products->quantity }}">
            </div>
             <div class="form-group">
                <label>價格：</label>
                <input name="price" class="form-control" value="{{ $products->price }}">
            </div>
            <div class="form-group">
                <label>成本：</label>
                <input name="cost" class="form-control" value="{{ $products->cost }}">
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
