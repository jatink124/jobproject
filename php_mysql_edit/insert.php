<?php include '../include/connectionstring.php'?>
<?php include 'insert_var.php' ?>
<?php
// $connect = mysqli_connect("localhost", "root", "", "findsarkarijob");


if(isset($_POST["BoardName"] ,$_POST["Eligibility"]))
{
 
	$Eligibility = '';
	foreach($_POST["Eligibility"] as $row)
	{
	 $Eligibility.= $row.',';
	}
	$Eligibility = substr($Eligibility, 0, -2);
	$typeofjob = '';
	foreach($_POST["typeofjob"] as $row)
	{
	 $typeofjob.= $row.',';
	}
	$typeofjob = substr($typeofjob, 0, -2);
	// $sql = "INSERT INTO tbl_boardname (bname) 
	// VALUES ('$BoardName')";
	// if (mysqli_query($connect, $sql)) {
	// 	$last_board_id = mysqli_insert_id($connect);
	// 	echo "New record created successfully. Last inserted ID is: " . $last_id;
	// } else {
	// 	echo "Error: " . $sql . "<br>" . mysqli_error($connect);
	// }
$sqll = "INSERT INTO tbl_post (post_name,Total_Vacancy,Grade_Pay,Age_Limit,Qualification,Experience,Duties,Howtoapply) 
	VALUES ('$post_name','$Total_Vacancy', '$Grade_Pay','$Age_Limit','$Qualification','$Experience','$duties','$Howtoapply')";
	if (mysqli_query($connect, $sqll)) {
		$last_id = mysqli_insert_id($connect);
		echo "New record created successfully. Last inserted ID is: " . $last_id;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($connect);
	}
	$sql = "INSERT INTO `jobdetail` (boardid,postid,Eligibility,JobLocation,jobdateadded,joblastdate,tags,typeofjob,
	MainLink,pdflink,lastdateoffee,status,imagelink,State,main_intro) VALUES ('$BoardName','$last_id', '$Eligibility', '$JobLocation',
	'$jobdateadded','$joblastdate','$tags','$typeofjob','$MainLink','$pdflink', '$lastdateoffee', '$status',
	'$imagelink','$State','$main_intro')";
$res = mysqli_query($connect, $sql);

	
	if($res){
		 return true;
	}else{
		return false;
	}


//     $CompanyName = mysqli_real_escape_string($connect, $_POST["CompanyName"]);
//  $Eligibility = mysqli_real_escape_string($connect, $_POST["Eligibility"]);
//  $query = "INSERT INTO jobdetail(CompanyName,Eligibility) VALUES('$CompanyName', '$Eligibility')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>
