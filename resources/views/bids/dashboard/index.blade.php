@extends('bids.layouts.master')

@section('title', '拍賣品開標')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            拍賣品
        </h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" style="text-align: center">
                <thead>
                    <tr>
                        <th width="100" style="text-align: center">id</th>
                        <th width="100" style="text-align: center">product_id</th>
                        <th width="100" style="text-align: center">開始日</th>
                        <th width="100" style="text-align: center">結束日</th>
                        <th width="100" style="text-align: center">投標方式</th>
                        <th width="100" style="text-align: center">上限</th>
                        <th width="100" style="text-align: center">下限</th>
                        <th width="100" style="text-align: center">投注功能</th>
                        <th width="100" style="text-align: center">數量</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
@if (count($auctions) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                目前拍賣品
            </div>

                    <!-- 表身 -->
                    <tbody>
                    @foreach ($auctions as $post)
                        <tr>
                            <!-- 任務名稱 -->
                                <td style="vertical-align:middle">{{ $post->id }}</td>
                                <td style="vertical-align:middle">{{ $post->product_id }}</td>
                                <td style="vertical-align:middle">{{ $post->start_date }}</td>
                                <td style="vertical-align:middle">{{ $post->end_date }}</td>
                                <td style="vertical-align:middle">{{ $post->betting_style }}</td>
                                <td style="vertical-align:middle">{{ $post->maximum }}</td>
                                <td style="vertical-align:middle">{{ $post->minimum }}</td>
                                <td style="vertical-align:middle">{{ $post->bid_function }}</td>
                                <td style="vertical-align:middle">{{ $post->quantity }}</td>
                        </tr>
                    @endforeach
                    </tbody>
        </div>
    @endif
                    </tr>
                </tbody>
            </table>                             
        </div>
    </div>
</div>
<!-- /.row -->
@endsection
