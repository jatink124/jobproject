<?php include '../include/connectionstring.php'?>
<?php
//fetch.php

$sql = "select * from tbl_salaryrange";
$salaryrangeresult = mysqli_query($connect, $sql);

?>