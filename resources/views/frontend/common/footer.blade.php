
</body>
<script type="text/javascript">
 	
function passwordCheck(value=''){
	if(value != ''){
	    $('#pswd_info').show();
		var pswd = value;
		//validate the length
		if ( pswd.length < 8 ) {
			$('#length').removeClass('valid').addClass('invalid');

		} else {
			$('#length').removeClass('invalid').addClass('valid');
		}
		//validate letter
		if ( pswd.match(/[A-z]/) ) {
			$('#letter').removeClass('invalid').addClass('valid');
		} else {
			$('#letter').removeClass('valid').addClass('invalid');
		}
		//validate capital letter
		if ( pswd.match(/[A-Z]/) ) {
			$('#capital').removeClass('invalid').addClass('valid');
		} else {
			$('#capital').removeClass('valid').addClass('invalid');
		}
		//validate number
		if ( pswd.match(/\d/) ) {
			$('#number').removeClass('invalid').addClass('valid');
		} else {
			$('#number').removeClass('valid').addClass('invalid');
		}
		
	} else{
		$('#pswd_info').hide();
	}
}
	
$(document).ready(function(){
	$('#RegistrationForm').on("focus","#password",function() {
			$('#pswd_info').fadeIn(500);
	}).on("blur","#password",function() {
			$('#pswd_info').fadeOut(500);
	});

	$('.btn-close').click(function(){
		$(".alert").alert('close'); 
	});
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

<link rel="stylesheet" type="text/css" href="{{asset('/assets')}}/alertify/themes/alertify.core.css" id="toggleCSS" />
<link rel="stylesheet" type="text/css" href="{{asset('/assets')}}/alertify/themes/alertify.default.css" id="toggleCSS" />
<script type="text/javascript" src="{{asset('/assets')}}/alertify/lib/alertify.min.js"></script>

<script type="text/javascript" src="https://www.google.com/recaptcha/api.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="{{asset('/assets')}}/vendors/skycons/skycons.js"></script>

<script src="{{asset('/assets')}}/js/moment/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.min.js"></script>

<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.datatables.net/keytable/2.5.2/js/dataTables.keyTable.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/scroller/2.0.2/js/dataTables.scroller.min.js"></script>
<script src="{{asset('/assets')}}/vendors/jszip/dist/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="{{asset('/assets')}}/vendors/pdfmake/build/vfs_fonts.js"></script>




<!-- Mirrored from ffmutual.dev-website.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Nov 2023 09:25:35 GMT -->
</html>