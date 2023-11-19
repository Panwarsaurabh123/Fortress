

<footer>
<div class="pull-right">
© 2023 Fortress Fund Managers Ltd. All Rights Reserved.
</div>
<div class="clearfix"></div>
</footer>


<div id="myModal" class="modal fade" role="dialog">
<div class="modal-dialog">

<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Reset Password</h4>
</div>
<div class="modal-body">
<p>Please Wait...</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
<script type="text/javascript">
	    var currentdate = new Date();
	    jQuery.noConflict();
		jQuery(document).ready(function($) {
            $.noConflict();

			$('#datatable-keytable1').DataTable( {
		    	responsive: true,
		        'ordering': false,
		        'bPaginate' : false
		    } );
            /*
            $(function () {
                $(".datepicker").datepicker({ changeYear: true, changeMonth: true });
            });
            
		    $('#datatable').DataTable( {
		    	responsive: true,
				'bPaginate' : false,
				dom: 'Bfrtip',
				buttons: [{
				    extend: 'print',
                    footer: true,
                    exportOptions: {
                        columns: ':visible'
                         },
                    customize: function ( win ) {
                        $(win.document.body)
                            .css( 'font-size', '10pt' )
                            .prepend(
                                '<img src="http://ffmutual.dev-website.com/img/fortresslogo.png" />'
                            );
     
                        $(win.document.body).find( 'table' )
                            .addClass( 'compact' )
                            .css( 'font-size', 'inherit' );
                        }
				    },
                    {
                        extend: 'pdf',
                        footer: true,
                        customize: function ( doc ) {
                            // Splice the image in after the header, but before the table
                            doc.content.splice( 1, 0, {
                                margin: [ 0, 0, 0, 12 ],
                                alignment: 'left',
                                image: 'data:image/png;base64,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'
                            } );
                            doc.styles.tableHeader.fillColor = '#51B5E0';
                        }
                    }
				],
                "footerCallback": function ( row, data, start, end, display ) { 
	                var api = this.api(), data; // Remove the formatting to get integer data for summation 
	                var intVal = function ( i ) { 
	                    return typeof i === 'string' ? i.replace(/[\$,]/g, '')*1 : typeof i === 'number' ? i : 0; 
	                    
	                }; // Total over all pages 
	                data = api.column( 1 ).data(); 
	                total = data.length ? data.reduce( function (a, b) { return intVal(a) + intVal(b); } ) : 0; // Total over this page 
	                data = api.column( 1, { page: 'current'}).data(); 
	                pageTotal = data.length ? data.reduce( function (a, b) { return intVal(a)+intVal(b); } ) : 0; // Update footer
	                $( api.column( 0 ).footer() ).html( 'Total Shares Bought / (Sold)' ); 
	                $( api.column( 1 ).footer() ).html( parseFloat(pageTotal).toFixed(4) ); 
	                
	                data = api.column( 3 ).data(); 
	                total = data.length ? data.reduce( function (a, b) { return intVal(a) + intVal(b); } ) : 0; // Total over this page 
	                data = api.column( 3, { page: 'current'} ).data(); 
	                pageTotal = data.length ? data.reduce( function (a, b) { return intVal(a)+intVal(b); } ) : 0; // Update footer 
	                $( api.column( 2 ).footer() ).html( 'Total Amount Invested' ); 
	                $( api.column( 3 ).footer() ).html( parseFloat(pageTotal).toFixed(4) ); 
	                
	                data = api.column( 5 ).data(); 
	                total = data.length ? data.reduce( function (a, b) { return intVal(a) + intVal(b); } ) : 0; // Total over this page 
	                data = api.column( 5, { page: 'current'} ).data(); 
	                pageTotal = data.length ? data.reduce( function (a, b) { return intVal(a)+intVal(b); } ) : 0; // Update footer 
	                $( api.column( 4 ).footer() ).html( 'Total Net Amount Invested / (Redeemed)' );  
	                $( api.column( 5 ).footer() ).html( parseFloat(pageTotal).toFixed(2) ); 
	            } 
		    } );
		    
		    $('#statement-datatable').DataTable( {
		    	responsive: true,
				'bPaginate' : false,
		        'ordering': false,
				dom: 'Bfrtip',
				buttons: [{
				    extend: 'print',
                    footer: true,
                    exportOptions: {
                        columns: ':visible'
                         },
                    customize: function ( win ) {
                            $(win.document.body)
                                .css( 'font-size', '10pt' )
                                .prepend(
                                    '<img src="http://ffmutual.dev-website.com/img/fortresslogo.png" />'
                                );
         
                            $(win.document.body).find( 'table' )
                                .addClass( 'compact' )
                                .css( 'font-size', 'inherit' );
                        }
                     },
                    {
                        extend: 'pdf',
                        footer: true,
                        customize: function ( doc ) {
                            // Splice the image in after the header, but before the table
                            doc.content.splice( 1, 0, {
                                margin: [ 0, 0, 0, 12 ],
                                alignment: 'left',
                                image: 'data:image/png;base64,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'
                            } );
                        }
                    }],
                "footerCallback": function ( row, data, start, end, display ) { 
	                var api = this.api(), data; // Remove the formatting to get integer data for summation 
	                var intVal = function ( i ) { 
	                    return typeof i === 'string' ? i.replace(/[\$,]/g, '')*1 : typeof i === 'number' ? i : 0; 
	                    
	                }; // Total over all pages 
	                data = api.column( 3 ).data(); 
	                total = data.length ? data.reduce( function (a, b) { return intVal(a) + intVal(b); } ) : 0; // Total over this page 
	                data = api.column( 3, { page: 'current'}).data(); 
	                pageTotal = data.length ? data.reduce( function (a, b) { return intVal(a)+intVal(b); } ) : 0; // Update footer
	                $( api.column( 2 ).footer() ).html( 'Total Shares Bought / (Sold)' ); 
	                $( api.column( 3 ).footer() ).html( parseFloat(pageTotal).toFixed(2) ); 
	                
	                data = api.column( 5 ).data(); 
	                total = data.length ? data.reduce( function (a, b) { return intVal(a) + intVal(b); } ) : 0; // Total over this page 
	                data = api.column( 5, { page: 'current'} ).data(); 
	                pageTotal = data.length ? data.reduce( function (a, b) { return intVal(a)+intVal(b); } ) : 0; // Update footer 
	                $( api.column( 4 ).footer() ).html( 'Total Amount Invested' ); 
	                $( api.column( 5 ).footer() ).html( parseFloat(pageTotal).toFixed(4) ); 
	                
	                data = api.column( 7 ).data(); 
	                total = data.length ? data.reduce( function (a, b) { return intVal(a) + intVal(b); } ) : 0; // Total over this page 
	                data = api.column( 7, { page: 'current'} ).data(); 
	                pageTotal = data.length ? data.reduce( function (a, b) { return intVal(a)+intVal(b); } ) : 0; // Update footer 
	                $( api.column( 6 ).footer() ).html( 'Total Net Amount Invested / (Redeemed)' );  
	                $( api.column( 7 ).footer() ).html( parseFloat(pageTotal).toFixed(2) ); 
	            } 
		    } );
		    
		    $('#statement-datatable1').DataTable( {
		    	responsive: true,
				'bPaginate' : false,
		        'ordering': false,
				dom: 'Bfrtip',
				buttons: [{
				    extend: 'print',
                    footer: true,
                    exportOptions: {
                        columns: ':visible'
                         },
                    customize: function ( win ) {
                        $(win.document.body)
                            .css( 'font-size', '10pt' )
                            .prepend(
                                '<img src="http://ffmutual.dev-website.com/img/fortresslogo.png" />'
                            );
     
                        $(win.document.body).find( 'table' )
                            .addClass( 'compact' )
                            .css( 'font-size', 'inherit' );
                    }
                 },
                    {
                        extend: 'pdf',
                        footer: true,
                        customize: function ( doc ) {
                            // Splice the image in after the header, but before the table
                            doc.content.splice( 1, 0, {
                                margin: [ 0, 0, 0, 12 ],
                                alignment: 'left',
                                image: 'data:image/png;base64,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'
                            } );
                        }
                    }]
		    } );

			*/
		    
		    /*$(document).ready(function() { 
		        $('#example').dataTable( { 
		            "footerCallback": function ( row, data, start, end, display ) { 
		                var api = this.api(), data; // Remove the formatting to get integer data for summation 
		                var intVal = function ( i ) { 
		                    return typeof i === 'string' ? i.replace(/[\$,]/g, '')*1 : typeof i === 'number' ? i : 0; 
		                    
		                }; // Total over all pages 
		                data = api.column( 4 ).data(); 
		                total = data.length ? data.reduce( function (a, b) { return intVal(a) + intVal(b); } ) : 0; // Total over this page 
		                data = api.column( 4, { page: 'current'} ).data(); 
		                pageTotal = data.length ? data.reduce( function (a, b) { return intVal(a) + intVal(b); } ) : 0; // Update footer 
		                $( api.column( 4 ).footer() ).html( '$'+pageTotal +' ( $'+ total +' total)' ); 
		            } 
		        } ); 
		    } );*/
		    
		    // $('#table').DataTable( {
		    // 	responsive: true,
		    //     'bPaginate' : false,
		    //     'ordering': false,
			// 	dom: 'Bfrtip',
			// 	buttons: [
			// 	'print'
			// 	]
		    // } );
		    
		  
		} );
</script> 
</div>
</div>
</body>
<script type="text/javascript">
      
	function approveClient(id){
		/*var id = this.getAttribute('rel');*/
		$.ajax({
				type: 'POST',
				url:  '/users/approve_client/'+id,                 
				success: function(response){
					if(response == 'Success'){
						alertify.alert("Client has been successfully approved");
						location.reload();
					}else{
						alertify.alert("There was an error during approval. Please try after some time.")
					}
				}
			}); //end ajax fire
	}
    
	function resetPassword(id){
		/*var id = this.getAttribute('rel');*/
		alertify.confirm("Are you sure you want to reset the client password? Then click 'OK' else 'CANCEL'.", function (e) {
			if (e) {	
				$.ajax({
					type: 'POST',
					url:  '/users/reset_pass/'+id,                 
					success: function(response){
						if(response == 'Success'){
							alertify.alert("Reset password link has been successfully sent to the client.");
							/*location.reload();*/
						}else{
							alertify.alert("There was an error during reset password. Please try after some time.")
						}
					}
				}); //end ajax fire
			} else{
				return false;
			}	
		});	
	}
    	
    	
    function deleteClient(id){ 
    	alertify.confirm("Are you sure you want to delete the client? Then click 'OK' else 'CANCEL'.", function (e) {
		    if (e) {
		        /*var id = this.getAttribute('rel');*/
	    		$.ajax({
					type: 'POST',
					url:"/admin/clients/delete/" + id,   
					data: {
					"_token": "{{ csrf_token() }}", 
					},    
					success: function(response){
						if(response == 'Success'){
							alertify.alert("Client has been successfully deleted.");
							location.reload();
						}else{
							alertify.alert("There was an error. Please try after some time.")
						}
					}
				}); //end ajax fire
		    } else {
		        return false;
		    }
		});
    		
    	} 
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

<link rel="stylesheet" type="text/css" href="{{asset('/assets')}}/alertify/themes/alertify.core.css" id="toggleCSS" />
<link rel="stylesheet" type="text/css" href="{{asset('/assets')}}/alertify/themes/alertify.default.css" id="toggleCSS" />
<script type="text/javascript" src="{{asset('/assets')}}/alertify/lib/alertify.min.js"></script>

<script type="text/javascript" src="https://www.google.com/recaptcha/api.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="{{asset('/assets')}}/vendors/skycons/skycons.js"></script>

<script src="{{asset('/assets')}}//js/moment/moment.min.js"></script>
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
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<script>
			$('.btn-close').click(function(){
				$(".alert").alert('close'); 
			});
	</script>

</html>