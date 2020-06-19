<?php include './include/connectionstring.php'?>
<?php
//fetch.php
$sql = "select tbn.id,tbn.bname from tbl_boardname tbn inner join jobdetail jd on tbn.id=jd.boardid order by jd.id desc";
$latest_bnresult = mysqli_query($connect, $sql);

?>