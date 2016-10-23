<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>
<script src="https://use.fontawesome.com/46f47b7c41.js"></script>
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
                <a class="navbar-brand" href="#">Dashboard</a>
            </div>
            <!-- /.navbar-header -->

            
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu"> 
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-tasks"></i> Activities<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="fitbitdetails/AgetActivities.php" target="fitbitdetails">Get Activities</a>
                                </li>
                                <li>
                                    <a href="fitbitdetails/AlogActivity.php" target="fitbitdetails">Log Activity</a>
                                </li>
                                <li>
                                    <a href="fitbitdetails/AgetActivityStats.php" target="fitbitdetails">Get Activity Stats</a>
                                </li>
                                <li>
                                    <a href="fitbitdetails/AgetBadges.php" target="fitbitdetails">Get Badges</a>
                                </li>
                                <li>
                                    <a href="fitbitdetails/AgetTimeSeries.php" target="fitbitdetails">Get Time Series</a>
                                </li>
                                <li>
                                    <a href="fitbitdetails/AgetRecentActivities.php" target="fitbitdetails">Get Recent Activities</a>
                                </li>
								                                <li>
                                    <a href="fitbitdetails/AgetFrequentActivities.php"target="fitbitdetails">Get Frequent Activities</a>
                                </li>
								                           
								                                <li>
                                    <a href="fitbitdetails/AgetFavoriteActivities.php" target="fitbitdetails">Get Favorite Activities</a>
                                </li>
								   <li>
                                    <a href="fitbitdetails/AgetActivityDailyGoals.php" target="fitbitdetails" >Get Activity Daily Goals</a>
                                </li>
								   <li>
                                    <a href="fitbitdetails/AgetActivityWeeklyGoals.php" target="fitbitdetails">Get Activity Weekly Goals</a>
                                </li>
								  <li>
                                    <a href="fitbitdetails/AupdateActivityDailyGoals.php" target="fitbitdetails">Update Activity Daily Goals</a>
                                </li>
								<li>
                                    <a href="fitbitdetails/AupdateActivityWeeklyGoals.php" target="fitbitdetails">Update Activity Weekly Goals</a>
                                </li>								
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						
						
						
						<li>
                            <a href="#"><i class="glyphicon glyphicon-cutlery"></i> Food<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="fitbitdetails/FgetFoods.php" target="fitbitdetails">Get Foods</a>
                                </li>
                                <li>
                                    <a href="fitbitdetails/FgetTimeSeries.php" target="fitbitdetails" >Get Time Series</a>
                                </li>
                                <li>
                                    <a  href="fitbitdetails/FgetRecentFoods.php" target="fitbitdetails">Get Recent Foods</a>
                                </li>
                                <li>
                                    <a href="fitbitdetails/FgetFrequentFoods.php" target="fitbitdetails">Get Frequent Foods</a>
                                </li>
                                <li>
                                    <a href="fitbitdetails/FgetFavoriteFoods.php" target="fitbitdetails">Get Favorite Foods</a>
                                </li>
                                <li>
                                    <a href="fitbitdetails/FgetWater.php" target="fitbitdetails">Get Water</a>
                                </li>
								                                <li>
                                    <a href="fitbitdetails/FgetMeals.php" target="fitbitdetails">Get Meals</a>
                                </li>
								                                <li>
                                    <a href="fitbitdetails/FgetGoals.php" target="fitbitdetails">Get Food Goals</a>
                                </li>							
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						
						
						
						
						
						<li>
                            <a href="#"><i class="fa fa-minus-circle"></i> Blood Pressure<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="fitbitdetails/BgetBloodPressure.php" target="fitbitdetails">Get Blood Pressure</a>
                                </li>
                                <li>
                                    <a href="fitbitdetails/BlogBloodPressure.php" target="fitbitdetails">Log Blood Pressure</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						
						
						
						
						
						
						
						<li>
                            <a href="#"><i class="fa fa-user"></i> Fitbit Profile<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="fitbitdetails/PgetUserInfo.php" target="fitbitdetails">Get User Info</a>
                                </li>
                                <li>
                                    <a href="fitbitdetails/PupdateUserInfo.php" target="fitbitdetails">Update User Info</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						
						<li>
                            <a href="#"><i class="fa fa-minus-circle"></i> Glucose<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="fitbitdetails/GgetGlucose.php" target="fitbitdetails">Get Glucose</a>
                                </li>
                                <li>
                                    <a  href="fitbitdetails/GlogGlucose.php" target="fitbitdetails">Log Glucose</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						
						
						
						<li>
                            <a href="#"><i class="fa fa-heartbeat"></i> Heart<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="fitbitdetails/HgetHeartRate.php" target="fitbitdetails">Get Heart Rate</a>
                                </li>
                                <li>
                                    <a href="fitbitdetails/HlogHeartRate.php" target="fitbitdetails">Log Heart Rate</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						
						
						
						
						
						<li>
                            <a href="#"><i class="fa fa-bed " ></i> Sleep<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="fitbitdetails/SgetSleep.php" target="fitbitdetails">Get Sleep</a>
                                </li>
                                <li>
                                    <a href="fitbitdetails/SlogSleep.php" target="fitbitdetails">Log Sleep</a>
                                </li>
								 <li>
                                    <a href="fitbitdetails/SgetTimeSeries.php" target="fitbitdetails">Get Time Series</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						
						
						
						
						
						
						
						<li>
                            <a href="#"><i class="fa fa-minus-circle"></i> Body Details<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="fitbitdetails/MgetBodyMeasurements.php" target="fitbitdetails">Get Body Measurements</a>
                                </li>
                                <li>
                                    <a href="fitbitdetails/MgetBodyWeight.php" target="fitbitdetails">Get Body Weight</a>
                                </li>
								 <li>
                                    <a href="fitbitdetails/MgetBodyFat.php" target="fitbitdetails">Get Body Fat</a>
                                </li>
								<li>
                                    <a href="fitbitdetails/MgetBadges.php" target="fitbitdetails">Get Badges</a>
                                </li>
								<li>
                                    <a href="fitbitdetails/MgetTimeSeries.php" target="fitbitdetails">Get Time Series</a>
                                </li>
								<li>
                                    <a href="fitbitdetails/MlogBodyMeasurements.php" target="fitbitdetails">Log Body Measurements</a>
                                </li>
								<li>
                                    <a href="fitbitdetails/MlogBodyWeight.php" target="fitbitdetails">Log Body Weight</a>
                                </li>
								<li>
                                    <a href="fitbitdetails/MlogBodyFat.php" target="fitbitdetails">Log Body Fat</a>
                                </li>
								<li>
                                    <a href="fitbitdetails/MgetBodyWeightGoal.php" target="fitbitdetails">Get Body Weight Goal</a>
                                </li>
                               
								<li>
                                    <a href="fitbitdetails/MupdateWeightGoal.php" target="fitbitdetails">Update Weight Goal</a>
                                </li>
								<li>
                                    <a href="fitbitdetails/MgetBodyFatGoal.php" target="fitbitdetails">Get Body Fat Goal</a>
                                </li>
								<li>
                                    <a href="fitbitdetails/MupdateFatGoal.php" target="fitbitdetails">Update Fat Goal</a>
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
            
                    
					<br>
					<iframe src="fitbitdetails/AlogActivity.php" class="embed-responsive-item" frameborder="0" name="fitbitdetails" scrolling="no" width="100%" height="2700"></iframe>
					
	
					
					
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



		
		




