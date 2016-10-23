


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<?php
session_start();
require_once("classes/fitbitapis/Activities.php");
require_once("classes/fitbitapis/Bp.php");
require_once("classes/fitbitapis/FitbitProfile.php");
require_once("classes/fitbitapis/Food.php");
require_once("classes/fitbitapis/Glucose.php");
require_once("classes/fitbitapis/Heart.php");
require_once("classes/fitbitapis/Sleep.php");
require_once("classes/fitbitapis/UserBody.php");
require_once("classes/UserClass.php");		
//$objUser=new UserClass();	
$token=$_SESSION["token"];
$objprofile	=new FitbitProfile();
$date="2015-03-01";
$res=$objprofile->getUserInfo($token);
$arr=json_decode($res,true);	
$nav=(array)$arr;
  $adc=json_decode(json_encode($nav), true);
	echo "<hr><table border=\"1\" align=\"center\"><tr><th>FIELD</th><th>Value</th></tr>";
	foreach($adc as $key=>$round)
	{
		if(is_array($round))
		{
			 printarray($round);
		}
		else
		{ 
			echo '<tr><td>'.$key.'</td><td>'.$round.'</td></tr>';
		}
	}







 function printarray($row)
{
	foreach($row as $key=>$row1)
	{
		if(is_array($row1))
		{
			 printarray($row1);
		}
		else
		{
			//echo "$key=>$row1"."<br/>";
			echo '<tr><td>'.$key.'</td><td>'.$row1.'</td></tr>';
		}
	}
}
echo "</table>";?>


					<div class="container">
					<div class="row">
					<div class="col-md-5">
  <h2>Hover Rows</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
  
  
 <?php 
 echo "<hr><table  class=\"table table-hover\" border=\"1\" align=\"center\"><tr><th>FIELD</th><th>Value</th></tr>";
 // print_r($adc);
  if (empty($adc))
{
    echo 'Error';
}
else
{
    echo 'No errors';
}
  
  
  
  foreach($adc as $key=>$round)
	{
		if(is_array($round))
		{
			 printarray($round);
		}
		else
		{ 
			echo '<tr><td>'.$key.'</td><td>'.$round.'</td></tr>';
		}
	}






echo "</table>";?>


  
  
  
</div>
</div>
</div>
</body>
<?php 
echo "hai";

?>