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
<span style="color: red;">
	@if(session('success_msg'))  
	<div class="alert alert-success alert-dismissible"> 
		{{session('success_msg')}}
		<button type="button" class="btn-close close" data-bs-dismiss="alert"><span aria-hidden="true">&times;</span>
		</button>
	</div>
	@elseif(session('error_msg'))
	<div class="alert alert-danger alert-dismissible"> 
		{{session('error_msg')}}
		<button type="button" class="btn-close close" data-bs-dismiss="alert"><span aria-hidden="true">&times;</span>
		</button>
	</div>
	@endif 
</span>
<div class="x_title">
<h2>Upload Data</h2>

<div class="clearfix"></div>
</div>  
        <form method="post" name="UserForgotPasswordForm" id="UserForgotPasswordForm" enctype="multipart/form-data" class="login-form" action="{{route('acc_client')}}">   
				<input type="hidden" name="_token" value="{{ csrf_token() }}">   
                 
				<div class="col-md-6"> 
                    <label for="acc_client">Upload Account Client file (.CSV)</label>
				    <input name="acc_client" class="form-control placeholder-no-fix" placeholder="Upload file" autocomplete="off" maxlength="150" type="file" id="acc_client" required /> 
                    <span style="color: red; float: left;">@if($errors->has('acc_client'))
                        {{ $errors->first('acc_client');}} 
                    @endif</span>
                </div>
                <div class="clearfix"></div>
                
                <div class="clearfix"></div>
              <br>
				<div  class="col-md-12"> 
					<button type="submit" class="btn btn-default btn-primary submit">Upload<i class="m-icon-swapright m-icon-white"> </i></button>
			  
				</div> 
 
				 
			</form>  
</div>
</div>
</div> 
@include('/admin/common/footer')