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
$objUser=new UserClass();	
$token=$_SESSION["token"];
$objprofile	=new UserBody();
$date="2015-03-01";
$res=$objprofile->getBodyFatGoal($token);
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
echo "</table>";

/*
$objprofile	=new FitbitProfile();
$res=$objprofile->getUserInfo($userToken);		
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
echo "</table>";*/

?>

		
		




