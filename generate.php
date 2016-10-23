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

<?php
$otp=$_POST['verify_otp'];
if($otp!=$_SESSION['secretpassword']){
header("location:verify.php?q=1");
}?>



<div class="alert alert-Sucess">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <center><h1>Congargulations You Have Sucessfully Generated Your Quote</h1></center>
  </div>
<center><br><h2>Rs 3160/-Only</h2>
<h4>our agent will contact soon as to collect proofs and for more details contact <u>queries@fitinsurance.com</u></h4>
</center>
