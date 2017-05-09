@extends('admin.layouts.master')

@section('title', '商品管理')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header" style="font-family:DFKai-sb;">
            商品管理 <small>所有商品列表</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit" style="font-family:DFKai-sb;"> 商品管理</i>
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row" style="margin-bottom: 20px; text-align: right">
    <div class="col-lg-12">
        <a href="{{ route('admin.products.create') }}" class="btn btn-success" style="font-family:DFKai-sb;">新增商品</a>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" style="font-size:16px;font-family:DFKai-sb;text-align:center;"  list-style-type="decimal">
                <thead>
                    <tr>
                        <th width="70" style="text-align: center">商品編號</th>
                        <th width="70" style="text-align: center">商品名稱</th>
                        <th width="70" style="text-align: center">商品類別</th>
                        <th width="70" style="text-align: center">商品規格</th>
                        <th width="70" style="text-align: center">商品圖片</th>
                        <th width="70" style="text-align: center">數量</th>
                        <th width="70" style="text-align: center">價格</th>
                        <th width="70" style="text-align: center">成本</th>
                        <th width="100" style="text-align: center">功能</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($products as $post)
                    <tr>
                        <td style="vertical-align:middle">P{{ $post->id }}</td>
                        <td style="vertical-align:middle" >
                        <a href="{{ route('admin.products.detail', $post->id) }}"style="font-family:DFKai-sb;">
                        {{ $post->name }}
                        </a>
                        </td>
                        <td style="vertical-align:middle">{{ $post->category }}</td>
                        <td style="vertical-align:middle">{{ $post->specification }}</td>
                        <td style="vertical-align:middle"><img src="/img/{{ $post->image }}" width="100px" height="100px"></td>
                        

                        <td style="vertical-align:middle">{{ $post->quantity}}</td>
                        <td style="vertical-align:middle">${{ $post->price }}</td>
                        <td style="vertical-align:middle">${{ $post->cost }}</td>
                        <td style="vertical-align:middle">
                            <div>
                                
                                <form action="{{ route('admin.products.destroy', $post->id) }}" method="POST" align="center">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button class="btn btn-success">刪除</button>
                                    <a href="{{ route('admin.products.edit', $post->id) }}" class="btn btn-success">編輯</a>
                                    <a href="{{ route('admin.auctions.create', $post->id) }}" class="btn btn-success">上架</a>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection
