@extends('layouts.app')

@section('title')
@section('content')
@include('common.errors')
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <div class="caption">
                    <h3></h3>
                    <div class="clearfix">
                        <div class="pull-left price"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="pager">
        <li class="next">
            <a herf="#">NextPage &rarr;</a>
        </li>
    </ul>
@endsection