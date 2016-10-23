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
require_once("bootstrapsrc.php");			
$token=$_SESSION["token"];
$objprofile	=new Food();
$date="2015-03-01";
$result=$objprofile->getFoods($token, $date);
$_arrJsonResult=json_decode($result,true);	
$_arrCompleteResult=(array)$_arrJsonResult;
$_arrFinalResult=json_decode(json_encode($_arrCompleteResult), true); 

#function to print array inside  the array 
 function printarray($row)
{
	foreach($row as $key=>$value)
	{
		if(is_array($value))
		{
			 printarray($value);
		}
		else
		{
			
			echo '<tr><td>'.$key.'</td><td>'.$value.'</td></tr>';
		}
	}
}
#end of the function
  
 if (count($_arrFinalResult)>1)
  {
  
  
  
  
	echo "<table border=\"1\" class=\"table table-hover\"><tr><th>Type</th><th>Value</th></tr>";
	foreach($_arrFinalResult as $key=>$value)
	{
		if(is_array($value))
		{
			 printarray($value);
		}
		else
		{ 
			echo '<tr><td>'.$key.'</td><td>'.$value.'</td></tr>';
		}
	}
echo "</table>";
  }
  else{
	  echo "No Data to display";
  }  
?>


