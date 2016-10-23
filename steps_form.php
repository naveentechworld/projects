<?php
session_start();
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>fitbit insurance form</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=0">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<script src='http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js'></script>

        <script src="js/index.js"></script>

    
    
        <link rel="stylesheet" href="css/style.css">
<style>
form#multiphase > #phase2, #phase3, #phase4, #phase5, #phase6, #show_all_data{ display:none; }
</style>

    
    <script>
$(document).ready(function(){
///this is for existinginsurance checkbox toggling   
   $("#rdb_health_exists").click(function () {
        if ($(this).is(":checked")) {
            $("#existinginsurance").show();
			
            } 
        });
    $("#rdb_health_doesnotexists").click(function () {
            if ($(this).is(":checked")) {
                $("#existinginsurance").hide();
            } 
        });
///this is for having any pre existing desieases   	
	
 $("#rdb_diseases_exists").click(function () {
        if ($(this).is(":checked")) {
            $("#existingdiseases").show();
            } 
        });
    $("#rdb_diseases_doesnotexists").click(function () {
            if ($(this).is(":checked")) {
                $("#existingdiseases").hide();
            } 
        });	
	
	
//this is for processing status of menu bar	
    $("#btn_for_1").click(function(){
		$("#phase1").css("display", "none");
		$("#phase2").css("display", "block");
        $("#one").addClass("previous visited");
		$("#two").addClass("active");
    });
	$("#btn_bck_1").click(function(){
		$("#phase2").css("display", "none");
		$("#phase1").css("display", "block");
		$("#one").removeClass("previous visited");
        $("#one").addClass("active");
		$("#two").removeClass("active");
    });
	$("#btn_for_2").click(function(){
		$("#phase2").css("display", "none");
		$("#phase3").css("display", "block");
        $("#one").addClass("previous visited");
		$("#two").addClass("previous visited");
		$("#three").addClass("active");
    });
	$("#btn_bck_2").click(function(){
		$("#phase3").css("display", "none");
		$("#phase2").css("display", "block");
		$("#two").removeClass("previous visited");
		$("#two").addClass("active");
		$("#three").removeClass("active");
        $("#three").addClass("");
    });
	$("#btn_for_3").click(function(){
		$("#phase3").css("display", "none");
		$("#phase4").css("display", "block");
        $("#one").addClass("previous visited");
		$("#two").addClass("previous visited");
		$("#three").addClass("previous visited");
		$("#four").addClass("active");
    });
	$("#btn_bck_3").click(function(){
		$("#phase4").css("display", "none");
		$("#phase3").css("display", "block");
		$("#three").removeClass("previous visited");
		$("#three").addClass("active");
		$("#four").removeClass("active");
        $("#four").addClass("");
    });
	$("#btn_for_4").click(function(){
		$("#phase4").css("display", "none");
		$("#phase5").css("display", "block");
        $("#one").addClass("previous visited");
		$("#two").addClass("previous visited");
		$("#three").addClass("previous visited");
		$("#four").addClass("previous visited");
		$("#five").addClass("active");
		
		
		//declaring variables
		var name= $('#txt_name').val();
				 var age=$('#txt_age').val();
					var gender=$('input:radio[name=rdb_gender]:checked').val();
					var ins_coverage=$('#sel_coverage').val();
					var title=$('#sel_title').val();
					var firstname=$('#txt_firstname').val();
					var surname=$('#txt_surname').val();
					var dob=$('#dob').val();
					var marital_status=$('input:radio[name=rdb_marital_status]:checked').val();
					var phno=$('#txt_phno').val();
					var email=$('#txt_email').val();
					var pincode=$('#txt_pincode').val();
					var city=$('#txt_city').val();
					var state=$('#txt_state').val();
					var residency=$('input:radio[name=rdb_residency]:checked').val();
					var occupation=$('#sel_occupation').val();
					var income=$('#txt_income').val();
					var smk_tbc=$('input:radio[name=rdb_tbc]:checked').val();
					$("#verify_phno").val(phno);
				//for  yes & no 				
					if($('input:radio[name=previous_ins]:checked').val()=="yes"){
			var previous_insurance=$('#previous_insurance').val();
		}
		else{
		var previous_insurance="no";
		}
		// close 
		// opening second
		if($('input:radio[name=any_diseases]:checked').val()=="yes"){
			var health_diseases=$('#any_diseases').val();
		}
		else {
		var health_diseases="no";
		}
		var nominee=$('#txt_nominee').val();
	    var relation_nominee=$('#sel_nominee').val();
					$.post( 
                  "secesstions.php",
                  { name: name,
				    age:age,
					gender:gender,
					ins_coverage:ins_coverage,
					title:title,
					firstname:firstname,
					surname:surname,
					dob:dob,
					marital_status:marital_status,
					phno:phno,
					email:email,
					pincode:pincode,
					city:city,
					state:state,
					residency:residency,
					occupation:occupation,
					income:income,
					smk_tbc:smk_tbc,
					previous_insurance:previous_insurance,
					health_diseases:health_diseases,
					nominee:nominee,
					relation_nominee:relation_nominee,
				  },
                  function(data) {
                    // $('#testing').html(data);
					 
                 }
               );
		
		
		
		// completed declaring
		
		
		
    });
	$("#btn_bck_4").click(function(){
		$("#phase5").css("display", "none");
		$("#phase4").css("display", "block");
		$("#four").removeClass("previous visited");
		$("#four").addClass("active");
		$("#five").removeClass("active");
        $("#five").addClass("");
//defing variables in sections 
	
              
    });

		
});
</script>
    
  </head>

  <body>

    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700' rel='stylesheet' type='text/css'>
<br>
  <div class="container">
    <div class="panel panel-primary">
	<div class="panel-heading text-center">Fitbit Lifeinsurance Wizard</div>
      <div class="panel-body">
    
<div class="checkout-wrap" >
  <ul class="checkout-bar" >

    <li class="active" id="one">                   
      <a href="#">Start</a> </li>
     <li class="" id="two">Fitness Discount</li>          
    <li class="" id="three">Personal Info</li>                 
    <li class="" id="four">Insured Details</li>
	<li class="" id="five">Confirmation</li>
	<li class="" id="six">Completion</li>
	
	
	
  </ul>
</div>

  <! -- To test add 'active' class and 'visited' class to different li elements -->

    <br><br> <br><br>
	<div class="row">
	<div class="col-md-offset-2">
   <form id="multiphase" role="form" method="post" action="otp.php">
    
 <div id="phase1">

<h2>1.Get Started<br></h2>
<h3>Four Simple Questions To Get Your Qoute</h3>
<p>We recommend you read the pay as you live policy before starting the quote.</p>
  <br />
  <div class="row">
	<div class="col-sm-3">
	
	  <label for="">Name:</label>
	</div>
        <div class='col-sm-3'>
          
		 
      <input type="text" class="form-control" name="txt_name" id="txt_name"/>
        
		  
    <br></div>
	</div>
	<div class="row">
	<div class="col-sm-3">
	
	  <label for="">Age:</label>
	</div>
        <div class='col-sm-3'>
          
		 
      <input type="number" max="111" min="5" class="form-control" id="txt_age" name="txt_age"/>
        
		  
    <br></div>
	</div>
    
	<div class="row">
	<div class="col-sm-3">
	  <label for="dob">Gender:</label>
	</div>
        <div class='col-sm-3'>
		 <div class="radio">
      <label><input type="radio" name="rdb_gender" id="rdb_gender" value="male">Male</label>
    
      <label><input type="radio" name="rdb_gender" id="rdb_gender" value="female">Female</label>
         </div>       
        </div>
    </div>
	
	
	
  <div class="row">
	<div class="col-sm-3">
	
	  <label for="ins_cov">What level of cover would you like?</label>
	</div>
        <div class='col-sm-3'>
          
		 
      <select class="form-control" name="sel_coverage" id="sel_coverage" >
        <option value="1">1 Lakh</option>
        <option value="2">2 Lakh</option>
		<option value="3">3 Lakh</option>
		<option value="5">5 lakh</option>
		<option value="10">10 Lakh</option>
      </select><br>
		
    </div></div>	
	<div class="row">
<div class="col-sm-3 col-md-offset-3">
   <button type="button" class="btn btn-primary" id="btn_for_1">Continue >></button>
</div>
   </div> 

  </div>
  <div id="phase2">
    
	
<h2>2.Fitness Discount<br></h2>
<h3>See How Your Premiums Could Change!</h3>
<p>Enter your daily averages from your tracker to see how your premiums could be affected.</p>
  <br />
    <div class="row">
	<div class="row">
	
	 
     <div class="col-md-3 col-md-offset-2" >
      
  <a href="https://www.fitbit.com/oauth2/authorize?response_type=code&client_id=227N5P&redirect_uri=http%3A%2F%2Flocalhost%2Fosm%2Ff%2Fmain.php%3F&scope=activity%20heartrate%20location%20nutrition%20profile%20settings%20sleep%20social%20weight&expires_in=604800" target="_blank"> <button type="button" class="btn btn-success btn-lg" >Sign In To Your Fitbit Account</button></a>
  </div>
   
	
    </div>  
</div>	
	
	
	<div class="row">
	<div class="col-sm-3">
   <button type="button" class="btn btn-primary" id="btn_bck_1" >Back</button>
</div>
<div class="col-sm-3 col-md-offset-3">
   <button type="button" class="btn btn-primary" id="btn_for_2" >Skip/Continue >></button>
</div>
   </div> 
  
   
   </div>
  
  <div id="phase3">
	
<h2>3. PAY Life Insurance Quote<br></h2>
<p>We recommend you read the Pay As you Live policy before starting the quote</p>
  <br />
  
	
	<h3>Personal Details</h3>
	    <div class="row">
	<div class="col-sm-3">
	
	  <label for="">Title:</label>
	</div>
        <div class='col-sm-3'>
          
		 
      <select class="form-control" name="sel_title" id="sel_title">
        <option>Mr.</option>
        <option>Mrs.</option>
      </select><br>
		  
    </div></div>
	<div class="row">
	<div class="col-sm-3">
	
	  <label for="">First Name:</label>
	</div>
        <div class='col-sm-3'>
          
		 
      <input type="text" class="form-control" name="txt_firstname" id="txt_firstname"/>
        
		  
    <br></div>
	</div>
	
	<div class="row">
	<div class="col-sm-3">
	
	  <label for="">Surname:</label>
	</div>
        <div class='col-sm-3'>
          
		 
      <input type="text" class="form-control" name="txt_surname" id="txt_surname"/><br>
        
		  
    </div>
	</div>
	<div class="row">
	<div class="col-sm-3">
	  <label for="dob">Date Of Birth (DD-MM-YYYY):</label>
	</div>
        <div class='col-sm-3'>
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" name="dob" id="dob"/>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
        </div>
    </div>
	<div class="row">
	<div class="col-sm-3">
	  <label for="dob">Marital Status:</label>
	</div>
        <div class='col-sm-3'>
		 <div class="radio">
      <label><input type="radio" name="rdb_marital_status"  id="rdb_marital_status" value="single">Single</label>
    
      <label><input type="radio" name="rdb_marital_status" id="rdb_marital_status" value="married">Married</label>
         </div>       
        </div>
    </div>
	
	
	<h3>Contact Details</h3>
	
	
	
	
	<div class="row">
	<div class="col-sm-3">
	
	  <label for="">Phone Number:</label>
	</div>
        <div class='col-sm-3'>
          
		 
      <input type="tel" class="form-control" name="txt_phno" id="txt_phno"/><br>
        
		
    </div>
	</div>
	<div class="row">
	<div class="col-sm-3">
	
	  <label for="">Email Address:</label>
	</div>
        <div class='col-sm-3'>
          
		 
      <input type="email" class="form-control" name="txt_email" id="txt_email"/><br>
        
		  
    </div>
	</div>
	<div class="row">
	<div class="col-sm-3">
	
	  <label for="">Postal Code:</label>
	</div>
        <div class='col-sm-3'>
          
		 
      <input type="text" class="form-control" name="txt_pincode" id="txt_pincode"/><br>
        
		  
    </div>
	</div>
	<div class="row">
	<div class="col-sm-3">
	
	  <label for="">City:</label>
	</div>
        <div class='col-sm-3'>
          
		 
      <input type="text" class="form-control" name="txt_city" id="txt_city"/><br>
        
		  
    </div>
	</div>
	 <div class="row">
	<div class="col-sm-3">
	
	  <label for="">State:</label>
	</div>
        <div class='col-sm-3'>
          
		 
      <input type="text" class="form-control" name="txt_state" id="txt_state"/><br>
        
		  
    </div>
	</div>
	
	<h3>Residency</h3>
    <div class="row">
	<div class="col-sm-3">
	
	  <label for="">Are You Permanent resident or citizen of india residing in india?</label>
	</div>
        <div class='col-sm-3'>
           <div class="radio">
      <label><input type="radio" name="rdb_residency" id="rdb_residency" value="yes">Yes</label>
    
      <label><input type="radio" name="rdb_residency"  id="rdb_residency" value="no">No</label>
    </div      
                   
        </div>
    </div>
	
    </div>
	<h3>About You</h3>
	    <div class="row">
	<div class="col-sm-3">
	
	  <label for="">Occupation:</label>
	</div>
        <div class='col-sm-3'>
          
		 
      <select class="form-control" name="sel_occupation" id="sel_occupation">
        <option>Software</option>
        <option>Hardware</option>
		<option>Teacher</option>
		<option>Driver</option>
		<option>Business</option>
		<option>Other</option>
      </select><br>
		  
    </div></div>
	
	
	 
	
	

		
		
		
		<div class="row">
	<div class="col-sm-3">
	
	  <label for="">Annual Income:</label>
	</div>
        <div class='col-sm-3'>
          
		 
      <input type="number" class="form-control" name="txt_income" id="txt_income"/><br>
        
		  
    </div></div>
		
		
   
	
    

	
	
	
	
	 
	<div class="row">
	<div class="col-sm-3">
   <button type="button" class="btn btn-primary" id="btn_bck_2" >Back</button>
</div>
<div class="col-sm-3 col-md-offset-3">
   <button type="button" class="btn btn-primary" id="btn_for_3" >Continue >></button>
</div>
   </div> 
 </div>
 
     
  
   <div id="phase4">
   <div class="row col-md-offset-1">
   <div class="row">
	<div class="col-sm-3">
	
	  <label for="">Are You Somking Tobacco From Last 12 Months?</label>
	</div>
        <div class='col-sm-3'>
           <div class="radio">
      <label><input type="radio" name="rdb_tbc" id="rdb_tbc" value="yes">Yes</label>
    
      <label><input type="radio" name="rdb_tbc" id="rdb_tbc" value="no">No</label>
    </div      
                   
        </div>
    </div>
	
    </div>
	
	<div class="row">
	<div class="col-sm-3">
	
	  <label for="">Are You Having Any Another Health Insurance?</label>
	</div>
        <div class='col-sm-3'>
           <div class="radio">
      <label><input type="radio" name="previous_ins" id="rdb_health_exists" value="yes">Yes</label>
    
      <label><input type="radio" name="previous_ins" id="rdb_health_doesnotexists"value="no">No</label>
    </div      
                   
        </div>
    </div>
	
    </div>
	
	

		
			
		<div class="row" id="existinginsurance" style="display: none">
	<div class="col-sm-3" >
	
	  <label for="">Name Of The Insurance:</label>
	</div>
        <div class='col-sm-3'>
          
		 
      <input type="text" class="form-control"  name="previous_ins" id="previous_insurance"/><br>
        
		  
    </div></div>
		
		
		
		
		<div class="row">
	<div class="col-sm-3">
	
	  <label for="">Are You Having Any Diseases?</label>
	</div>
        <div class='col-sm-3'>
           <div class="radio">
      <label><input type="radio" name="any_diseases" id="rdb_diseases_exists" value="yes">Yes</label>
    
      <label><input type="radio" name="any_diseases" id="rdb_diseases_doesnotexists"value="no">No</label>
    </div      
                   
        </div>
    </div>
	
    </div>
	
	

		
			
		<div class="row" id="existingdiseases" style="display: none">
	<div class="col-sm-3" >
	
	  <label for="">Name Of Disease:</label>
	</div>
        <div class='col-sm-3'>
          
		 
      <input type="text" class="form-control" name="any_diseases" id="any_diseases"/><br>
        
		  
    </div></div>
	
	
	
		<div class="row">
	<div class="col-sm-3">
	
	  <label for="">Nominee Name:</label>
	</div>
        <div class='col-sm-3'>
          
		 
      <input type="text" class="form-control" name="txt_nominee" id="txt_nominee"/><br>
        
		  
    </div></div>
	
			<div class="row" ">
	<div class="col-sm-3" >
	
	  <label for="">RelationShip:</label>
	</div>
        <div class='col-sm-3'>
          
	  <select class="form-control" name="sel_nominee" id="sel_nominee" >
        <option value="1">Spouse</option>
        <option value="2">Mother</option>
		<option value="3">Daughter</option>
		<option value="5">Son</option>
		<option value="10">Father</option>
		<option value="10">Brother</option>
		<option value="10">Sister</option>
      </select><br>
        
		  
    </div></div>

	</div>
	
	<div class="row">
	<div class="col-sm-3">
   <button type="button" class="btn btn-primary"  id="btn_bck_3">Back</button>
</div>
<div class="col-sm-3 col-md-offset-3">
   <button type="button" class="btn btn-primary" id="btn_for_4" >Continue >></button>
</div>
   </div> 

     
       
  </div>
   <div id="phase5">

<h2>5.FITLIFE Insurance Application<br></h2>
<p>please check your mobile number once.</p>
  <br />
    <div class="row">
	<div class="row">
     <div class="col-md-3 col-md-offset-3" >
	
	
       <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">VERIFICATION OF IDENTITY</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
  <br><br><br><br><br><br><br><br><br>
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center">Mobile Verification</h4>
        </div>
        <div class="modal-body">
          <div class="row">
	<div class="col-sm-3 col-md-offset-3">
	
	  <label for="">Check Your Mobile Number:</label>
	</div>
        <div class='col-sm-3'>
          
		 
      <input type="number" class="form-control" name="verify_phno" id="verify_phno" value="" /><br>
        
		  
    </div></div>
	<div class="row">
		<div class="col-sm-3 col-md-offset-6">
   <button type="submit" class="btn btn-primary" id="">Send OTP</button>
</div></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> 
          
	
        
		  
   </div> 
	</div>
   
	
    </div>
	
	
  
    

	
	
	<div class="row">
	<div class="col-sm-3">
   <button type="button" class="btn btn-primary" id="btn_bck_4">Back</button>
</div>
<div class="col-sm-3 col-md-offset-5">
   <button type="button" class="btn btn-primary" id="btn_for_5">Continue >></button>
</div>
   </div> 
 </div>
	
   <div id="phase6">
  

	<div class="row">
	<div class="row">
	
	 
     <div class="col-md-3 col-md-offset-2" >
	 
	
	
	
	
	  
			  
        
		
		
		
	



	
	
		  
   </div> 
	</div>
   
	
    </div>
	
	 
	<div class="row"> 
	<div class="col-md-offset-1 col-md-6">

	
	
     </div>              
    </div>    
 
  
    

	
	
	<div class="row">
	<div class="col-sm-3">
   <button type="button" class="btn btn-primary" id="btn_bck_5">Back</button>
</div>
<div class="col-sm-3 col-md-offset-3">
   <button type="button" class="btn btn-primary" id="btn_for_6">Continue >></button>
</div>
   </div> 
 </div>
 </div>
	
		</div>
		
</form>


</div>
   </div>
	</div>
	</div>
</div>
</body>
</html>