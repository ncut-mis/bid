@extends('layouts.app')

@section('title')
@section('content')
@include('common.errors')
<?php
foreach ($type as $type){
?>
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <div class="caption">
                    <h3>{{$type->type_no}}</h3>
                    <div class="clearfix">
                        <div class="pull-left price">{{$type->type_name}}</div>
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