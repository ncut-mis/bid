@extends('admin.layouts.master')

@section('title', '類別管理')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            類別管理 <small>所有類別列表</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 類別管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row" style="margin-bottom: 20px; text-align: right">
    <div class="col-lg-12">
        <a href="{{ route('admin.categories.create') }}" class="btn btn-success">建立新類別</a>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="30" style="text-align: center">#</th>
                        <th>類別</th>
                       <!-- <th width="70" style="text-align: center">精選？</th>-->
                        <th width="100" style="text-align: center">功能</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($categories as $post)
                    <tr>
                        <td style="text-align: center">{{ $post->id }}</td>
                        <td>{{ $post->name }}</td>
                        <!--<td style="text-align: center">{{ $post->is_feature?'V':'X' }}</td>-->
                        <td>
                            <div>
                                <a href="{{ route('admin.categories.edit', $post->id) }}" class="btn btn-success">編輯</a>
                                /
                                <form action="{{ route('admin.categories.destroy', $post->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button class="btn btn-success">刪除</button>
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
