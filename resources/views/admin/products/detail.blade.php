@extends('admin.layouts.master')

@section('title', '商品明細')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header" style="font-family:DFKai-sb;">
            商品明細 <small>商品明細</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit" style="font-family:DFKai-sb;">商品明細</i>
            </li>
        </ol>
    </div>
</div>

<div class="thumbnail">
 <img class="img-responsive" src="/img/{{ $products->image }}">
  <hr>
   <div>                       
    <form action="{{ route('admin.products.destroy', $products->id) }}" method="POST" align="center">
     {{ csrf_field() }}
     {{ method_field('DELETE') }}
     <button class="btn btn-success">刪除</button>
     <a href="{{ route('admin.products.edit', $products->id) }}" class="btn btn-success">編輯</a>
     <a href="{{ route('admin.auctions.create', $products->id) }}" class="btn btn-success">上架</a>
    </form>
   </div>
  <hr>
<div class="caption-full">
 <table class="table table-bordered table-hover" style="font-size:16px;font-family:DFKai-sb;text-align:center;"  list-style-type="decimal">
  <thead>
   <tr>
    <th width="70" style="text-align: center">商品編號</th>
    <th width="70" style="text-align: center">商品名稱</th>
    <th width="70" style="text-align: center">商品類別</th>
    <th width="70" style="text-align: center">商品規格</th>
    <th width="70" style="text-align: center">數量</th>
    <th width="70" style="text-align: center">價格</th>
    <th width="70" style="text-align: center">成本</th>
   </tr>
  </thead>
 <tbody>
   <tr>
    <td style="vertical-align:middle">{{$products->id}}</td>
    <td style="vertical-align:middle">{{$products->name}}</td>
    <td style="vertical-align:middle">{{$products->category}}</td>
    <td style="vertical-align:middle">{{$products->specification}}</td>
    <td style="vertical-align:middle">{{$products->quantity}}</td>
    <td style="vertical-align:middle">{{$products->price}}</td>
    <td style="vertical-align:middle">{{$products->cost}}</td>
   </tr>
 </tbody>
 </table>
</div>
</div>

<div class="well">
<div class="text-right">
</div>
<hr>
<div class="row">
<div class="col-md-12">
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
                    </tr>
                @endforeach
                </tbody>
            </table>              
</div>                           
</div>
</div>

@endsection