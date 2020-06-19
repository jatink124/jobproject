
<?php
//fetch.php
$sql = "select * from tbl_state";
$sqlnav = "select tbd.boardid,tbs.statename,tbs.id from tbl_boarddept tbd inner JOIN tbl_state tbs on tbd.state=tbs.id group by tbd.state
order by count(tbd.state) desc";
$stateresult = mysqli_query($connect, $sql);
$statetab = mysqli_query($connect, $sql);
$statenav = mysqli_query($connect, $sqlnav);
?>