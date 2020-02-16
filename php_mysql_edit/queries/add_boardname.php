<?php include '../../include/connectionstring.php'?>
<?php
//fetch.php

//$connect = mysqli_connect("localhost", "root", "", "findsarkarijob");
$BoardName = mysqli_real_escape_string($connect, $_POST["boardname"]);
 $sql = "INSERT INTO tbl_boardname (bname) 
 VALUES ('$BoardName')";
$resultt = mysqli_query($connect, $sql);
header('Location: ../../adddata');
?>