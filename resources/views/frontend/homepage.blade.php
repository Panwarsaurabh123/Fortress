@include('/frontend/common/header') 
<div class="login_wrapper">
<div class="animate form login_form">
<section class="login_content">

<form method="post" name="UserAdminLoginForm" id="UserAdminLoginForm" class="login-form" action="{{route('login')}}">  
	<input type="hidden" name="_token" value="{{ csrf_token() }}">  
	
	<h1><strong>Login</strong></h1>
 
	<div> 
		<input name="email" class="form-control placeholder-no-fix" placeholder="Please enter email" autocomplete="off" maxlength="150" type="email" id="UserEmailId" /> 
	</div>

	<div>
		<input name="password" class="form-control placeholder-no-fix" placeholder="Please enter password" autocomplete="off" type="password" id="UserPassword" /> 
	</div>
	
	<div> 
		<button type="submit" class="btn btn-default btn-primary submit" onclick="return FnCheckForm();">Login <i class="m-icon-swapright m-icon-white"> </i></button>

		<a class="reset_pass" href="{{route('forgot_password')}}">Reset password.</a>
	</div>

	<div class="clearfix"></div>
	<div class="separator">
		<p class="change_link">New to this site?
			<a href="#signup" class="to_register"> Create account. </a>
		</p>
		<div class="clearfix"></div>
		<br/>
	<div> 

	<p></p>
	<p>&copy; 2023 Fortress Fund Managers Ltd. All Rights Reserved.</p>
	</div>
	</div>
</form>


</section>
</div>
<style>
	.error{
		color: #D12124;
		margin-bottom: 2%;
	}
</style>
<div id="register" class="animate form registration_form">
<section class="login_content">
<div id="resgisterMsg"></div>
	<form method="post" name="RegistrationForm" id="RegistrationForm" class="login-form" action="{{route('register')}}"> 

		<h1>Create Account</h1>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<div>
		<span style="color: red; float: left;">@if($errors->has('name'))
			{{ $errors->first('name');}} 
		@endif</span>
		<input name="name" class="form-control placeholder-no-fix" placeholder="Name" autocomplete="off" type="text" id="name" value="{{old('name')}}" required/> 
		
	</div>
	<div>
		<span style="color: red; float: left; ">@if($errors->has('email'))
			{{ $errors->first('email');}} 
		@endif</span>
		<input name="email" class="form-control placeholder-no-fix" placeholder="Email" autocomplete="off" type="email" id="email" value="{{old('email')}}" required/> 
		
	</div>
	<div>
		<span style="color: red; float: left;">@if($errors->has('password'))
			{{ $errors->first('password');}} 
		@endif</span>
		<input name="password" class="form-control placeholder-no-fix" placeholder="Password" autocomplete="off" onkeyup="passwordCheck(this.value);" type="password" id="password" value="{{old('password')}}" required/> 
		
	</div>
	<div>
		<span style="color: red; float: left;">@if($errors->has('client_id'))
					{{ $errors->first('client_id');}} 
			@endif</span>
		<input name="client_id" class="form-control placeholder-no-fix" placeholder="Client ID" autocomplete="off" type="text" id="client_id" value="{{old('client_id')}}" required /> <a id="single_image" href="#ex1" rel="modal:open"><img src="{{asset('/assets')}}/img/tooltip.png" class="tooltip-img"></a>
		
	</div>
	<div>
		<span style="color: red; float: left;">@if($errors->has('nationality_id'))
				{{ $errors->first('nationality_id');}} 
		@endif</span>
		<input name="nationality_id" class="form-control placeholder-no-fix" placeholder="National ID Number" autocomplete="off" type="text" id="nationality_id" value="{{old('nationality_id')}}" required /> 
		
	</div>
	<div>
 
	<input class="btn btn-default submit" type="submit" value="Register" />

	</div>
	<div class="clearfix"></div>
	<div class="separator">
	<p class="change_link">Already a member ?
	<a href="#signin" class="to_register"> Log in </a>
	</p>
	<div class="clearfix"></div>
	<br/>
	<div>


	<p></p>
	<p>&copy; 2023 Fortress Fund Managers Ltd. All Rights Reserved.</p>
	</div>
	</div>
	<div id="pswd_info">
	<i class="fa fa-angle-left" style="float: left; font-size: 26px; left: -11%; position: relative; top: 40%;"></i>
	<h4>Password must meet the following requirements:</h4>
	<ul>
	<li id="letter" class="invalid">At least <strong>one letter</strong></li>
	<li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
	<li id="number" class="invalid">At least <strong>one number</strong></li>
	<li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
	</ul>
	</div>
	</form>
</section>
</div>
</div>
</div>
@include('/frontend/common/footer')