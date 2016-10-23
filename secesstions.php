<?php
session_start();
$_SESSION["name"] =$_REQUEST['name'];
$_SESSION["age"] =$_REQUEST['age'];
$_SESSION["gender"] =$_REQUEST['gender'];
$_SESSION["ins_coverage"] =$_REQUEST['ins_coverage'];
$_SESSION["title"] =$_REQUEST['title'];
$_SESSION["firstname"] =$_REQUEST['firstname'];
$_SESSION["surname"] =$_REQUEST['surname'];
$_SESSION["dob"] =$_REQUEST['dob'];
$_SESSION["marital_status"] =$_REQUEST['marital_status'];
$_SESSION["phno"] =$_REQUEST['phno'];
$_SESSION["email"] =$_REQUEST['email'];
$_SESSION["pincode"] =$_REQUEST['pincode'];
$_SESSION["city"] =$_REQUEST['city'];
$_SESSION["state"] =$_REQUEST['state'];
$_SESSION["residency"] =$_REQUEST['residency'];
$_SESSION["occupation"] =$_REQUEST['occupation'];
$_SESSION["income"] =$_REQUEST['income'];
$_SESSION["smk_tbc"] =$_REQUEST['smk_tbc'];
$_SESSION["previous_insurance"] =$_REQUEST['previous_insurance'];
$_SESSION["health_diseases"] =$_REQUEST['health_diseases'];
$_SESSION["nominee"] =$_REQUEST['nominee'];
$_SESSION["relation_nominee"] =$_REQUEST['relation_nominee'];
?>