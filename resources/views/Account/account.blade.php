@extends('layouts.app')

@section('content')
 @include('common.errors')
				<div class="row">
					<div class="col-md-3">
					<ul id="sidebar-nav" class="sidebar-nav margin-bottom-30px">
					<nav class="navbar navbar-default ">   
 <div id="sidebar-wrapper">
            <ul class="sidebar-nav-tabs">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Shortcuts</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
		
                    </nav>
					</ul>
					</div>
					
					<div class="col-md-9">
						<!-- BASIC -->
						<h2 class="section-heading">會員中心</h2>					
							<div class="row">
								<div class="col-md-12">
									<div class="team-member media">
										<div class="media-body">
										</div>
										
									</div>
									
								</div>
							</div>
						<!-- END SIZING -->
					</div>
@endsection