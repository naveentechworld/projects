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
$objprofile	=new FitbitProfile();
$date="2015-03-01";
$res=$objprofile->getUserInfo($token);
$arr=json_decode($res,true);	
$nav=(array)$arr;
  $adc=json_decode(json_encode($nav), true);
	echo "<hr><table border=\"1\" class=\"table table-hover\" align=\"center\"><tr><th>FIELD</th><th>Value</th></tr>";
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



















































<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        

                      
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Activities<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Get Activities</a>
                                </li>
                                <li>
                                    <a href="#">Log Activity</a>
                                </li>
                                <li>
                                    <a href="#">Get Activity Stats</a>
                                </li>
                                <li>
                                    <a href="#">Get Badges</a>
                                </li>
                                <li>
                                    <a href="#">Get Time Series</a>
                                </li>
                                <li>
                                    <a href="#">Get Recent Activities</a>
                                </li>
								                                <li>
                                    <a href="#">Get Frequent Activities</a>
                                </li>
								                                <li>
                                    <a href="#">Get Recent Activities</a>
                                </li>
								                                <li>
                                    <a href="#">Get Favorite Activities</a>
                                </li>
								   <li>
                                    <a href="#">Add Favorite Activity</a>
                                </li>
								   <li>
                                    <a href="#">Get Activity Daily Goals</a>
                                </li>
								   <li>
                                    <a href="#">Get Activity Weekly Goals</a>
                                </li>
								  <li>
                                    <a href="#">Update Activity Daily Goals</a>
                                </li>
								<li>
                                    <a href="#">Update Activity Weekly Goals</a>
                                </li>								
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						
						
						
						<li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Food<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Get Foods</a>
                                </li>
                                <li>
                                    <a href="#">Get Time Series</a>
                                </li>
                                <li>
                                    <a href="#">Get Recent Foods</a>
                                </li>
                                <li>
                                    <a href="#">Get Frequent Foods</a>
                                </li>
                                <li>
                                    <a href="#">Get Favorite Foods</a>
                                </li>
                                <li>
                                    <a href="#">Get Water</a>
                                </li>
								                                <li>
                                    <a href="#">Create Food</a>
                                </li>
								                                <li>
                                    <a href="#">Get Meals</a>
                                </li>
								                                <li>
                                    <a href="#">Get Food Goals</a>
                                </li>							
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						
						
						
						
						
						<li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Blood Pressure<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Get Blood Pressure</a>
                                </li>
                                <li>
                                    <a href="login.html">Log Blood Pressure</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						
						
						
						
						
						
						
						<li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Fitbit Profile<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Get User Info</a>
                                </li>
                                <li>
                                    <a href="login.html">Update User Info</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						
						<li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Glucose<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Get Glucose</a>
                                </li>
                                <li>
                                    <a href="login.html">Log Glucose</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						
						
						
						<li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Heart<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Get Heart Rate</a>
                                </li>
                                <li>
                                    <a href="login.html">Log Heart Rate</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						
						
						
						
						
						<li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sleep<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Get Sleep</a>
                                </li>
                                <li>
                                    <a href="login.html">Log Sleep</a>
                                </li>
								 <li>
                                    <a href="login.html">Get Time Series</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						
						
						
						
						
						
						
						<li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Body Details<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Get Body Measurements</a>
                                </li>
                                <li>
                                    <a href="login.html">Get Body Weight</a>
                                </li>
								 <li>
                                    <a href="login.html">Get Body Fat</a>
                                </li>
								<li>
                                    <a href="login.html">Get Badges</a>
                                </li>
								<li>
                                    <a href="login.html">Get Time Series</a>
                                </li>
								<li>
                                    <a href="login.html">Log Body Measurements</a>
                                </li>
								<li>
                                    <a href="login.html">Log Body Weight</a>
                                </li>
								<li>
                                    <a href="login.html">Log Body Fat</a>
                                </li>
								<li>
                                    <a href="login.html">Get Body Weight Goal</a>
                                </li>
                                </li>
								<li>
                                    <a href="login.html">Update Weight Goal</a>
                                </li>
								<li>
                                    <a href="login.html">Get Body Fat Goal</a>
                                </li>
								<li>
                                    <a href="login.html">Update Fat Goal</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
                        
                     
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            
                    
					
					<iframe src="sample.php" frameborder="0" scrolling="no" style="width: 100%; height: 100%; id="fileframe"></iframe>
					<h1 class="page-header">Dashboard</h1><br>
	
					
					
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript
    <script src="bower_components/raphael/raphael-min.js"></script>
    <script src="bower_components/morrisjs/morris.min.js"></script>
    <script src="js/morris-data.js"></script> -->

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>



		
		




