<?php include '../include/connectionstring.php'?>
<?php
//fetch.php

$sql = "select * from tbl_eligibility";
$eligresult = mysqli_query($connect, $sql);

?>