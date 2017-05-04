@extends('layouts.app')

@section('title')
@section('content')
@include('common.errors')
<?php
foreach ($product as $product){
?>
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <div class="caption">
                    <h3>{{$product->product_name}}</h3>
                    <div class="clearfix">
                        <div class="pull-left price">${{$product->price}}</div>
                        <a href="#" class="btn btn-success pull-right" role="button">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>
    <ul class="pager">
        <li class="next">
            <a herf="#">NextPage &rarr;</a>
        </li>
    </ul>
@endsection