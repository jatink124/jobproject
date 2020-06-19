<?php include './include/connectionstring.php'?>
<?php
//fetch.php
$sql = "select * from tbl_eligibility";
$qualresult = mysqli_query($connect, $sql);
$qualtabs = mysqli_query($connect, $sql);
?>