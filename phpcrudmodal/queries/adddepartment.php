<?php include '../include/connectionstring.php'?>
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
 $sql = "INSERT INTO tbl_boarddept (boardid,deptname,deptpostname,numberofposts,salary,deptqualification,jobrole) 
 VALUES ('$departmentboard','$depname','$departpostname','$depnoofpost','$depsalary','$depqualification','$deproles')";

if (mysqli_query($connect, $sql)) {
    header('Location: ../../adddata');
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($connect);
	}

?>