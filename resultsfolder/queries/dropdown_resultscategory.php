<?php include '../include/connectionstring.php'?>
<?php
//fetch.php

$sql = "select * from tbl_results_category";
$categoryresult = mysqli_query($connect, $sql);

?>