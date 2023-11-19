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
<h2>Users</h2>

<div class="clearfix"></div>
</div>
    <div class="x_content">
        <div class="card-box table-responsive">
            <table id="datatable-keytable1" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Client ID</th>
                        <th>Nationality ID</th>
                        <th>Approval Status</th>
                        <!-- <th>Reset Password</th> -->
                        <!-- <th>Approve Client</th> -->
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($users as $user) {?>
                    <tr>
                        <td>{{$user->name}}</td>
                        <!-- <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e692839592a685948387928f90838c938885928f8988c885898b">[email&#160;protected]</a></td> -->
                        <td>{{$user->email}}</td>
                        <td>{{$user->client_id}}</td>
                        <td>{{$user->nationality_id}}</td>
                        <td><?php echo ($user->user_status) == 1 ? 'Approved' : 'Pending' ?></td>
                        <td><a href="{{url('/admin/client/reset_pass/')}}/{{$user->id}}"  id="reset_pass" class="btn btn-primary btn-lg" rel="{{$user->id}}">Reset Password</a>
                        <!-- <td>N/A</td> -->
                        <a href="javascript:void(0);" onclick="deleteClient({{$user->id}})" id="delete" class="btn btn-primary btn-lg" rel="{{$user->id}}">Delete</a></td>
                    </tr>
                    
                <?php } ?>
                </tbody>
            </table>
        </div>
        
    </div>
</div>
</div>
</div> 
@include('/admin/common/footer')