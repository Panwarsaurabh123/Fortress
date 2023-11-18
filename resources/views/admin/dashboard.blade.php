@include('/admin/common/header')
<div class="container body">
<div class="main_container">
<div class="col-md-3 left_col">
<div class="left_col scroll-view">
<div class="navbar nav_title" style="border: 0;">
<a href="{{route('admin_dashboard')}}" class="site_title"><img src="{{asset('/assets')}}//img/fortresslogo.png" alt="logo" /></a>
</div>
<div class="clearfix"></div>
@include('/admin/common/sidebar') 
    <div class="top_nav">
        <div class="nav_menu">
            <nav>
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown-submenu1">
                        <a href="{{route('logout')}}" class="user-profile">
                        <img src="{{asset('/assets')}}/img/logout.png" alt>Log Out </a>
                        <ul class="dropdown-menu dropdown-usermenu pull-right">
                            <li><a href="{{route('logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div> 

    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>My account</h2>

                        <div class="clearfix"></div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div> 
@include('/admin/common/footer')