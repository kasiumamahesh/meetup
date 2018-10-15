<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{url('/admin')}}">Group Us</a>
            <a class="navbar-brand hidden" href="{{url('/admin')}}"><img src="asset('images1/logo.png')" alt="Plastic Bags"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{url('/admin')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"    aria-expanded="false"><i class="menu-icon fa fa-tags"></i>Categories</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-angle-right"></i><a href="{{url('/addcat')}}">Add Category</a></li>
                        <li><i class="menu-icon fa fa-angle-right"></i><a href="{{url('/catlist')}}">Categories List</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('/glist')}}"> <i class="menu-icon fa fa-users"></i>Groups</a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa fa-calendar"></i>Events</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-angle-right"></i><a href="{{url('/eventslist')}}">Events List</a></li>
                        <li><i class="menu-icon fa fa-angle-right"></i><a href="{{url('/upeventlist')}}">Upcoming Events</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('/users')}}"> <i class="menu-icon fa fa-user"></i>Users</a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="login.php">Login</a></li>
                        <li><i class="menu-icon fa fa-paper-plane"></i><a href="forgot-password.php">Forget Pass</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('/paylist')}}"> <i class="menu-icon fa fa-money"></i>Payments</a>
                </li>
                <li>
                    <a href="payment-list.php"> <i class="menu-icon ti-email"></i>Mails</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>