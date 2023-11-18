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
<th>Reset Password</th>
<th>Approve Client</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
<tr>
<td>Test Acc</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e692839592a685948387928f90838c938885928f8988c885898b">[email&#160;protected]</a></td>
<td>10721</td>
<td>0</td>
<td>Approved</td>
<td><a href="javascript:void(0);" onclick="resetPassword(3)" id="reset_pass" class="btn btn-primary btn-lg" rel="3">Reset Password</a></td>
<td>N/A</td>
<td><a href="javascript:void(0);" onclick="deleteClient(3)" id="delete" class="btn btn-primary btn-lg" rel="3">Delete</a></td>
</tr>
<tr>
<td>Test</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d3a0a4b2b4b2a7b2b0e2e293b4beb2babffdb0bcbe">[email&#160;protected]</a></td>
<td>11006</td>
<td>ABC</td>
<td>Approved</td>
<td><a href="javascript:void(0);" onclick="resetPassword(7)" id="reset_pass" class="btn btn-primary btn-lg" rel="7">Reset Password</a></td>
<td>N/A</td>
<td><a href="javascript:void(0);" onclick="deleteClient(7)" id="delete" class="btn btn-primary btn-lg" rel="7">Delete</a></td>
</tr>
<tr>
<td>Peter Arender</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0d7d6879687f4d6b627f797f687e7e6b786369236e6260">[email&#160;protected]</a></td>
<td>11838</td>
<td>700106-8035</td>
<td>Approved</td>
<td><a href="javascript:void(0);" onclick="resetPassword(8)" id="reset_pass" class="btn btn-primary btn-lg" rel="8">Reset Password</a></td>
<td>N/A</td>
<td><a href="javascript:void(0);" onclick="deleteClient(8)" id="delete" class="btn btn-primary btn-lg" rel="8">Delete</a></td>
</tr>
</tbody>
</table>
</div>
<div class="row">
<div class="col-md-5 col-sm-12">
<div class="dataTables_info" id="sample_editable_1_info">Showing 1 - 3 of 3</div>
</div>
<div class="col-md-7 col-sm-12">
</div>
</div>
</div>
</div>
</div>
</div>
</div> 
@include('/admin/common/footer')