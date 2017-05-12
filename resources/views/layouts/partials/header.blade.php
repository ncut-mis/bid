<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
<div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

                    <!-- Branding Image -->
                      <a class="navbar-brand" href="#">Lucky Life</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-left">            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    佈告欄 <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="/notice/system">系統公告</a></li>
                                    <li><a href="/notice/activity">活動公告</a></li>
                                </ul>
                            </li>
                    </ul>
                     <ul class="nav navbar-nav navbar-left">            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    商品分類 <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="/product/product">全部商品</a></li>
                                    <li><a href="/product/3c">3C/手機/電腦周邊</a></li>
                                    <li><a href="/product/electric equipment">家用電器</a></li>
                                </ul>
                            </li>
        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                    <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                     <li><a href="{{ route('account.dashboard.index')}}">會員中心</a></li>
                                     <li><a href="{{ route('storevalue.dashboard.index')}}">儲值</a></li>
                                </ul>
                            </li>
                           <li><a href="{{ url('/shoppingcart') }}">WishList</a></li>  
                
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
</div>
    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
