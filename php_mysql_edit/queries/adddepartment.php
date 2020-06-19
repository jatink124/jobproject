<?php include '../../include/connectionstring.php'?>
<?php
//fetch.php

$deptelig = ',';
	foreach($_POST["deptelig"] as $row)
	{
	 $deptelig .= $row . ',';
	}
	// $deptelig = substr($deptelig, 0, 3);
	$toj = ',';
	foreach($_POST["toj"] as $row)
	{
	 $toj .= $row . ',';
	}
	// $toj = substr($toj, 0, -2);
	$state = ',';
	foreach($_POST["state"] as $row)
	{
	 $state .= $row . ',';
	}
	// $state = substr($state, 0, -2);
//$connect = mysqli_connect("localhost", "root", "", "findsarkarijob");
$departmentboard = mysqli_real_escape_string($connect, $_POST["departmentboard"]);
$depname = mysqli_real_escape_string($connect, $_POST["depname"]);
$departpostname = mysqli_real_escape_string($connect, $_POST["departpostname"]);
$depnoofpost = mysqli_real_escape_string($connect, $_POST["depnoofpost"]);
$depsalary = mysqli_real_escape_string($connect, $_POST["depsalary"]);
$depqualification = mysqli_real_escape_string($connect, $_POST["depqualification"]);
$deproles = mysqli_real_escape_string($connect, $_POST["deproles"]);
$dsp = mysqli_real_escape_string($connect, $_POST["dsp"]);
$agelimit = mysqli_real_escape_string($connect, $_POST["agelimit"]);
$tags = mysqli_real_escape_string($connect, $_POST["tags"]);
$toj = mysqli_real_escape_string($connect, $toj);
$state = mysqli_real_escape_string($connect, $state);
 $sql = "INSERT INTO tbl_boarddept (boardid,deptname,deptpostname,posts,salary,qualification,jobrole,desiredspecialization,agelimit,deptelig,tags,toj,state) 
 VALUES ('$departmentboard','$depname','$departpostname','$depnoofpost','$depsalary','$depqualification','$deproles','$dsp','$agelimit','$deptelig','$tags','$toj','$state')";

if (mysqli_query($connect, $sql)) {
    header('Location: ../../adddata');
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($connect);
	}

?>