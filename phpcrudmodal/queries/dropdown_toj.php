<?php include '../include/connectionstring.php'?>
<?php
//fetch.php

$sql = "select * from tbl_typeofjob";
$tojresult = mysqli_query($connect, $sql);

?>