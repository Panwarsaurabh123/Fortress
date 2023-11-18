
<div class="profile">

<div class="profile_info">
<?php $userdata = Session::get('userdata'); ?>
<h2>Welcome, <?php echo ucfirst($userdata->name);?></h2> 
</div>
</div>

<br/>

<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
<div class="menu_section">

<ul class="nav side-menu">
<?php 
 
if($userdata->role === 1){ ?> 
<li><a href="{{route('admin_dashboard')}}"><i class="fa fa-user"></i>Users</a></li> 
<li><a href="{{route('import')}}"><i class="fa fa-cloud-upload"></i>Upload Data</a></li>
<?php }  ?>

<?php  
if($userdata->role === 2){ ?> 
<li><a href="{{route('user_dashboard')}}"><i class="fa fa-user"></i>My Account</a></li>  
<?php }  ?>


</ul>
</div>
</div>


<div class="sidebar-footer hidden-small">
</div>
 </div>
</div>
