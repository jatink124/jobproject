<?php include '../../include/connectionstring.php'?>
<?php
//fetch.php

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
$deptelig = mysqli_real_escape_string($connect, $_POST["deptelig"]);
 $sql = "INSERT INTO tbl_boarddept (boardid,deptname,deptpostname,posts,salary,qualification,jobrole,desiredspecialization,agelimit,deptelig) 
 VALUES ('$departmentboard','$depname','$departpostname','$depnoofpost','$depsalary','$depqualification','$deproles','$dsp','$agelimit','$deptelig')";

if (mysqli_query($connect, $sql)) {
    header('Location: ../../adddata');
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($connect);
	}

?>