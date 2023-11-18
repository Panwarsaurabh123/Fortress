@include('/frontend/common/header')
<div class="login_wrapper">
	<div class="animate form login_form">
		<section class="login_content"> 
			
			<form method="post" name="UserForgotPasswordForm" id="UserForgotPasswordForm" class="login-form" action="{{route('forgot_password')}}">   
				<input type="hidden" name="_token" value="{{ csrf_token() }}">  
				<h1><strong>Reset password</strong></h1> 
			
				<div>

					<input name="email" class="form-control placeholder-no-fix" placeholder="User Email" autocomplete="off" maxlength="150" type="email" id="UserEmailId" required /> 
					<span style="color: red; float: left;">@if($errors->has('email'))
							{{ $errors->first('email');}} 
						@endif</span>	
				</div>

				<div> 
					<button type="submit" class="btn btn-default btn-primary submit" onclick="return FnCheckForm();">Submit<i class="m-icon-swapright m-icon-white"> </i></button>
					<a class="reset_pass" href="{{route('loginPage')}}">Go to Login Page</a>
				</div>
				<div class="clearfix"></div>
				<div class="separator"></div>
				<div class="clearfix"></div>
				<br/>
				<div> 
					<p></p>
					<p>&copy; 2017 Fortress Fund Managers Ltd. All Rights Reserved.</p>
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
<form method="post" name="RegistrationForm" id="RegistrationForm" class="login-form">
<h1>Create Account</h1>
<div>
<input name="data[name]" class="form-control placeholder-no-fix" placeholder="Name" autocomplete="off" type="text" id="name" /> </div>
<div>
<input name="data[email]" class="form-control placeholder-no-fix" placeholder="Email" autocomplete="off" type="email" id="email" /> </div>
<div>
<input name="data[password]" class="form-control placeholder-no-fix" placeholder="Password" autocomplete="off" onkeyup="passwordCheck(this.value);" type="password" id="password" /> </div>
<div>
<input name="data[client_id]" class="form-control placeholder-no-fix" placeholder="Client ID" autocomplete="off" type="text" id="client_id" /> </div>
<div>
<input name="data[nationality_id]" class="form-control placeholder-no-fix" placeholder="National ID Number" autocomplete="off" type="text" id="nationality_id" /> </div>
<div>
<div class="col-md-12">
<div id="recaptcha" class="g-recaptcha" data-sitekey="6LfHtR0UAAAAALqwBe6bdYywHXUv041R1lycJLk9" data-size="invisible">
</div>
</div>
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
<p>� 2017 Fortress Fund Managers Ltd. All Rights Reserved.</p>
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