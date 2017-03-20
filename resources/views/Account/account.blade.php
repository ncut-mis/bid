@extends('layouts.app')

@section('content')
 @include('common.errors')
<body style="background-image: url('img/home-bg.jpg')">
<div class="row">
<div class="col-md-3 ">
<ul class="sidebar-nav ">
<li class="list-group-item ">
<a href="#Buttons" class="submenu-toggle" data-toggle="collapse" data-parent="sidebar-nav">會員資料</a>
<ul id="Buttons" class="list-unstyled collapse submenu in">
<li><a href="user_edit.php">資料修改</a></li>
<li><a href="pwd_edit.php">密碼修改</a></li>
<li><a href="address_edit.php">收貨地址</a></li>
</ul>
</li>
<li class="list-group-item"><a href="/">奪寶紀錄</a></li>				
<li class="list-group-item"><a href="/">儲值紀錄</a></li>
<li class="list-group-item "><a href="/">獲得商品</a></li>
<li class="list-group-item "><a href="/">贏家分享</a></li>
<li class="list-group-item "><a href="{{ url('/logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            Logout</a></li>
</ul>
</div>					
<div class="col-md-9">
<div class="thumbnail">
<!-- BASIC -->
<h2 class="section-heading">會員中心</h2>
</div>				
<div class="row">
<div class="col-md-12">
<div class="thumbnail">
<div class="team-member media">
<div class="media-body">
123456
</div>
</div>
</div>
</div>
</div>
<!-- END SIZING -->
</div>						
</div>
</body>
@endsection