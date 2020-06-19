<?php include '../include/connectionstring.php'?>
<?php
//fetch.php

$sql = "select * from tbl_state";
$stateresultnew = mysqli_query($connect, $sql);

?>