<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name') }}
                    </a>      
    </div>
     <ul class="nav navbar-right top-nav">    
      <li>          
        <a href="{{ url('/logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}
        </form>
      </li>  
    </ul>      
    <!-- Top Menu Items -->
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active">
                <a href="{{ route('storevalue.dashboard.index')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
            </li>
            <li>
                <a href="{{ route('storevalue.create') }}"><i class="fa fa-fw fa-edit"></i>儲值</a>
            </li>
            <li>
                <a href="{{ route('storevalue.index') }}"><i class="fa fa-fw fa-edit"></i>儲值紀錄</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
