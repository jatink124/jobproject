<?php include '../include/connectionstring.php'?>
<?php
//fetch.php

$sql = "select * from tbl_agerange";
$agerangeresult = mysqli_query($connect, $sql);

?>