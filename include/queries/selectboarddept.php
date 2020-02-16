<?php
$que = "select * from tbl_boarddept bd INNER JOIN tbl_boardname bn on bd.boardid=bn.id";
$resul = mysqli_query($connect, $que);
$deptname=[];
while ($row = $resul->fetch_assoc()){
      $deptname = $row['deptname'];
}
?>