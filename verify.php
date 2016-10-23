<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<script type="text/javascript">
    $(window).load(function(){
        $('#myModal').modal('show');
    });
</script>
</script>
<body>
 <center><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Re Enter OTP Again</button>
</center>
  <div class="modal fade" id="myModal" role="dialog">
  <br><br><br><br><br><br><br><br><br>
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center">Mobile Verification<?php  /*echo " ".$_SESSION['secretpassword'] ; */?></h4>
        </div>
        <div class="modal-body">
          <div class="row">
		  
		  	<?php if (isset($_GET['q'])) {?>


<div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>OOPS!</strong>  Entered Wrong OTP.Try Again.
  </div>
<?php
}
?>
	<div class="col-sm-2 col-md-offset-3">
	<form method="post" action="generate.php">
	  <label for="">Enter Otp:</label>
	</div>
	

	
        <div class='col-sm-3'>
          
		 
      <input type="text" class="form-control" name="verify_otp" id="verify_otp" value="" /><br>
        
		  
    </div></div>
	
	<div class="row">
		<div class="col-sm-3 col-md-offset-6">
   <button type="submit" class="btn btn-primary" id="">Verify OTP</button>
</div></div></form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> 

</body>
</html>
