@extends('admin.layouts.master')

@section('title', '文章管理')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            產品管理 <small>所有產品列表</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 產品管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row" style="margin-bottom: 20px; text-align: right">
    <div class="col-lg-12">
        <a href="{{ route('admin.products.create') }}" class="btn btn-success">新增產品</a>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="70" style="text-align: center">產品編號</th>
                        <th width="70" style="text-align: center">產品名稱</th>
                        <th width="70" style="text-align: center">產品類別</th>
                        <th width="70" style="text-align: center">產品規格</th>
                        <th width="70" style="text-align: center">數量</th>
                        <th width="70" style="text-align: center">價格</th>
                        <th width="70" style="text-align: center">成本</th>
                        <th width="100" style="text-align: center">功能</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($products as $post)
                    <tr>
                        <td align="center">{{ $post->id }}</td>
                        <td align="center">{{ $post->name }}</td>
                        <td align="center">{{ $post->category }}</td>
                        <td align="center">{{ $post->specification }}</td>
                        <td align="center">{{ $post->quantity }}</td>
                        <td align="center">{{ $post->price }}</td>
                        <td align="center">{{ $post->cost }}</td>
                        <td>
                            <div>
                                
                                <form action="{{ route('admin.products.destroy', $post->id) }}" method="POST" align="center">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button class="btn btn-success">刪除</button>
                                    <a href="{{ route('admin.products.edit', $post->id) }}" class="btn btn-success">編輯</a>
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
