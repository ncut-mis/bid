@extends('admin.layouts.master')

@section('title', '新增類別')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            新增類別 <small>請輸入類別</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 類別管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->
@include('admin.layouts.partials.validation')
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <form action="/admin/categories" method="POST" role="form">
            {{ csrf_field() }}

            <div class="form-group">
                <label>類別名稱：</label>
                <input name="name" class="form-control" placeholder="請輸入類別名稱">
            </div>

 <!--       <div class="form-group">
                <label>內容：</label>
                <textarea name="content" class="form-control" rows="10"></textarea>
            </div>

            <div class="form-group">
                <label>精選？</label>
                <select name="is_feature" class="form-control">
                    <option value="0">否</option>
                    <option value="1">是</option>
                </select>
            </div>  --> 

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
