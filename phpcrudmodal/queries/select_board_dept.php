<?php include '../include/connectionstring.php'?>
<?php  
 //$connect = mysqli_connect("localhost", "root", "", "findsarkarijob");  
 $query = "SELECT bd.id,bd.deptname,bn.bname FROM tbl_boarddept bd INNER JOIN tbl_boardname bn ON bd.boardid=bn.id ORDER BY id asc";  
 $resulttt = mysqli_query($connect, $query);  

?>  