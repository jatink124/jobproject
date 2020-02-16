<?php include '../include/connectionstring.php'?>
<?php
//fetch.php
//$connect = mysqli_connect("localhost", "root", "", "findsarkarijob");
$sql = "select * from tbl_boardname";
$boardresult = mysqli_query($connect, $sql);
?>