<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ffmutual.dev-website.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Nov 2023 09:24:59 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>@if(!empty($PageTitle )) {{$PageTitle}} @else Fortress Mutual Fund - Login  @endif</title> 
<link href="{{asset('/assets')}}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="{{asset('/assets')}}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<link href="{{asset('/assets')}}/vendors/nprogress/nprogress.css" rel="stylesheet">

<link href="{{asset('/assets')}}/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

<link href="{{asset('/assets')}}/vendors/animate.css/animate.min.css" rel="stylesheet">

<link href="{{asset('/assets')}}/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">



<link href="{{asset('/assets')}}/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="{{asset('/assets')}}/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
<link href="{{asset('/assets')}}/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
<link href="{{asset('/assets')}}/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
<link href="{{asset('/assets')}}/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

<link href="{{asset('/assets')}}/buildcss/css/custom.min.css" rel="stylesheet">
<link href="{{asset('/assets')}}/buildcss/css/style.css" rel="stylesheet">
<link href="{{asset('/assets')}}/css/jquery-ui.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<style>
                .display{
                    display : block;
                }
                .display-hide{
                    display : none;
                }
            </style>
</head>
<div class="mobile-logo" style="border: 0;">
<a href="index.html" class><img src="{{asset('/assets')}}/img/fortresslogo.png" alt="logo" /></a>
</div>
<style>
#pswd_info {
    background: #fefefe none repeat scroll 0 0;
    border: 1px solid #ddd;
    border-radius: 5px;
    bottom: 30%;
    box-shadow: 0 1px 3px #ccc;
    font-size: 0.875em;
    padding: 15px;
    position: absolute;
    right: 0%;
    width: 250px;
    float: left;
    text-align: left !important;
  	margin-right: -50%;
  	top: 15%;
  	height: 200px;
}
@media only screen and (min-width: 1920px){
	#pswd_info {
    right: 2%;
    width: 250px;
}
}
#pswd_info h4 {
    margin:0 0 10px 0;
    padding:0;
    font-weight:normal;
}

#pswd_info::before {
    /*content: "\25B2";*/
    position:absolute;
    top:-12px;
    left:45%;
    font-size:14px;
    line-height:14px;
    color:#ddd;
    text-shadow:none;
    display:block;
}

.invalid {
    /* background:url(images/invalid.png) no-repeat 0 50%;*/
    padding-left:22px;
    line-height:24px;
    color:#ec3f41;
}
.valid {
   /* background:url(images/valid.png) no-repeat 0 50%;*/
    padding-left:22px;
    line-height:24px;
    color:#3a7d34;
}

#pswd_info {
    display:none;
}
.mobile-logo{
	display: none !important;
}
.login_content form input[type="text"],.login_content form input[type="email"], .login_content form input[type="password"] {
    width: 80%;
    float: left;
}

.tooltip-img {
    width: 30px;
    float: left;
    }
    
#register {
    z-index: 0 !important;
}
.modal {    
    max-width: 800px !important;
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<script type="text/javascript">

	function FnCheckForm(){
		var ArisError = [];
		var ArErrorMsg = [];
		var ArFieldId = [] ;
		var UserEmail = $.trim($('#UserEmailId').val());
		var UserPassword = $.trim($('#UserPassword').val());				
		//alert($.trim($('#UserEmailId').val()));
		if(UserEmail!=''){			
			if(FnIsEmail(UserEmail)){
				ArisError.push(false);
				ArErrorMsg.push('');
				ArFieldId.push('UserEmailId');
			}else{				
				ArisError.push(true);
				ArErrorMsg.push('Invalid email. Try Again!');
				ArFieldId.push('UserEmailId');
			}			
		}
		else{			
			ArisError.push(true);
			ArErrorMsg.push('Email is required. Try Again!');
			ArFieldId.push('UserEmail');
		}
		
		if(UserPassword==''){
			ArisError.push(true);
			ArErrorMsg.push('Password is required.  Try Again!');
			ArFieldId.push('UserPassword');
		}
		else
		{
			ArisError.push(false);
			ArErrorMsg.push('');
			ArFieldId.push('UserPassword');
		}	
			
		var IsErrorFlag = false;
		// check for any error		
		for(var i = 0; i < ArisError.length; i++) {
			
	        if(ArisError[i] == true){
				if($.trim(ArErrorMsg[i])!=''){
					$('#errorMsg').removeClass('display-hide');
					$('#errorMsg').html(ArErrorMsg[i]).css('color','#a00');;
						
				}
				if(!IsErrorFlag){//if atleast one error occour setting flag true;
					var FirstErrorFieldNo = i;
					IsErrorFlag = true;
					break;
				}
				 
			}
	    }
		
		if(IsErrorFlag){
			$('#'+ArFieldId[FirstErrorFieldNo]).focus();
			return false;
		}else{
			return true;
		}
	    
	}
	
	function forgot_password(){

		var UserEmail = $.trim($('#UserEmail').val());
            if(UserEmail){
				$.ajax({
					type:'post',
					url:'/users/forgot_password',
                    data:{email:UserEmail},
                    success:function(response){
                        alertify.alert(response);
                        $('#UserEmail').val('');
                    },
                    beforeSend:function(){
                        alertify.success('Please wait......');
                    }
                });
            }                   
  
        return false ;
    }
    
</script>
<body class="login">
<div id="ex1" class="modal" style="z-index: 100;">
<p><img src="{{asset('/assets')}}/img/find-your-client-id.jpg" style="max-width: 100%; width: 800px;"></p>
<a href="#" rel="modal:close">Close</a>
</div>
<div>
<a class="hiddenanchor" id="signup"></a>
<a class="hiddenanchor" id="signin"></a>
<a href="{{route('loginPage')}}">
<img src="{{asset('/assets')}}/img/fortresslogo.png" class="logo" alt="logo" />
</a>
<div class="header-title">
<h1>Fortress Accounts Online</h1> 
</div>
<br>
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