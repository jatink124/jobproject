<?php include '../include/connectionstring.php'?>
<?php
//fetch.php

$sql = "select * from tbl_boardname";
$resultt = mysqli_query($connect, $sql);
$addresultt = mysqli_query($connect,$sql);
?>