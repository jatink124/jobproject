<?php include './include/connectionstring.php'?>
<?php
//fetch.php
$sql = "select * from tbl_eligibility";
$designationresult = mysqli_query($connect, $sql);
?>