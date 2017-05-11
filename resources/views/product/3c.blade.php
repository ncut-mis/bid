@extends('layouts.app')
        <!-- 顯示驗證錯誤 -->
    @include('common.errors')
@section('content')
 <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="http://img.epochtimes.com.tw/upload/images/2015/05/19/136677_medium.jpg" alt="..." class="img-responsive">
                <div class="caption">
                    <h3>I Phone 6s</h3>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores error eum inventore officia quis quos totam! Asperiores deleniti, distinctio illum incidunt nulla officiis quas suscipit vitae? Magni necessitatibus repellendus voluptate!</p>
                    <div class="clearfix">
                        <div class="pull-left price">$12</div>
                        <a href="#" class="btn btn-success pull-right" role="button">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
@endsection