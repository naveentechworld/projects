<?php
session_start();
require_once("classes/UserClass.php");		
$objUser=new UserClass();	
$token=$_SESSION["token"];
   echo '<script type="text/javascript">
           window.location = "fitbitdetails.php"
      </script>'; 
	  ?>