<?php
$em=$_GET['idj'];
?>
<div class="title h6">Enter OTP</div>
						<form class="content"  method="POST" id="form_ots">
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label"></label>
							            <input class="form-control" placeholder="OTP" type="number" name="otp"  required>
							            <input class="form-control" placeholder="OTP" type="hidden" name="cmail" value="<?php echo $em; ?>">
									</div>
								</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
		                            <button type="submit" name="submit" class="btn btn-primary btn-lg full-width" value="">
                                    Submit
		                            </button>
		                      </div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="color:#08ddc1;" id="ots_i">
							OTP has been sent to your registered mobile number.
							</div>
							</div>
						</form>

<script>
	$("#form_ots").on('submit',(function(e) {
		e.preventDefault();
		 document.getElementById('ots_i').innerHTML= '<img src="sub_cat/load1.png" />';     

		$.ajax({
        	url: "place_order_ots.php",
			type: "POST",
			data:  new FormData(this),
			
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
		    
			$('#ots_i').html(data);
		    },
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
</script>