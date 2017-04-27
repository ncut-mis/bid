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

<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" style="font-size:16px;font-family:DFKai-sb;text-align:center;"  list-style-type="decimal">
                <thead>
                    <tr>
                        <th width="70" style="text-align: center">拍賣品編號</th>
                        <th width="70" style="text-align: center">商品編號</th>
                        <th width="70" style="text-align: center">開始日期</th>
                        <th width="70" style="text-align: center">結束日期</th>
                        <th width="70" style="text-align: center">投注型態</th>
                        <th width="70" style="text-align: center">最小投注量</th>
                        <th width="70" style="text-align: center">最大投注量</th>
                        <th width="70" style="text-align: center">數量</th>
                        <th width="100" style="text-align: center">功能</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($auctions as $post)
                    <tr>
                        <td style="vertical-align:middle">A{{ $post->id }}</td>
                        <td style="vertical-align:middle">P{{ $post->product_id }}</td>
                        <td style="vertical-align:middle">{{ $post->start_date }}</td>
                        <td style="vertical-align:middle">{{ $post->end_date }}</td>
                        <td style="vertical-align:middle">{{ $post->bid_type }}</td>
                        <td style="vertical-align:middle">{{ $post->min_bids }}</td>
                        <td style="vertical-align:middle">{{ $post->max_bids }}</td>
                        <td style="vertical-align:middle">{{ $post->quantity }}</td>
                        <td style="vertical-align:middle">
                            <div>
                                    <a href="{{ route('admin.auctions.edit', $post->id) }}" class="btn btn-success">編輯</a>
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
