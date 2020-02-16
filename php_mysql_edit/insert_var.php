<?php include '../include/connectionstring.php'?>
<?php
//$connect = mysqli_connect("localhost", "root", "", "findsarkarijob");
$BoardName = mysqli_real_escape_string($connect, $_POST["BoardName"]);
$Eligibility = mysqli_real_escape_string($connect, $_POST["Eligibility"]);
$JobLocation = mysqli_real_escape_string($connect, $_POST["JobLocation"]);
$jobdateadded = mysqli_real_escape_string($connect, $_POST["jobdateadded"]);
$joblastdate = mysqli_real_escape_string($connect, $_POST["joblastdate"]);
$tags = mysqli_real_escape_string($connect, $_POST["tags"]);
$typeofjob = mysqli_real_escape_string($connect, $_POST["typeofjob"]);
$MainLink = mysqli_real_escape_string($connect, $_POST["MainLink"]);
$pdflink = mysqli_real_escape_string($connect, $_POST["pdflink"]);
$lastdateoffee = mysqli_real_escape_string($connect, $_POST["lastdateoffee"]);

$status = mysqli_real_escape_string($connect, $_POST["status"]);
$imagelink = mysqli_real_escape_string($connect, $_POST["imagelink"]);

$State = mysqli_real_escape_string($connect, $_POST["State"]);
$main_intro = mysqli_real_escape_string($connect, $_POST["main_intro"]);

$post_name = mysqli_real_escape_string($connect, $_POST["post_name"]);
$Total_Vacancy = mysqli_real_escape_string($connect, $_POST["Total_Vacancy"]);

$Grade_Pay = mysqli_real_escape_string($connect, $_POST["Grade_Pay"]);
$Age_Limit = mysqli_real_escape_string($connect, $_POST["Age_Limit"]);

$Qualification = mysqli_real_escape_string($connect, $_POST["Qualification"]);
$Experience = mysqli_real_escape_string($connect, $_POST["Experience"]);

$duties = mysqli_real_escape_string($connect, $_POST["Duties"]);
$Howtoapply = mysqli_real_escape_string($connect, $_POST["Howtoapply"]);
?>