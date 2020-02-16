<?php include '../include/connectionstring.php'?>
<?php  
 //fetch.php  
 
 //$connect = mysqli_connect("localhost", "root", "", "findsarkarijob");  
 if(isset($_POST["id"]))  
 {  
     $quer = "SELECT bd.deptname,elig.id elo,sr.id sr,bd.deptpostname,bd.posts,bd.salary,bd.qualification,
     bd.jobrole,bd.id,bd.boardid,bd.salaryrange,bd.agelimit,bd.desiredspecialization dsp 
  FROM tbl_boarddept bd INNER JOIN tbl_boardname bn ON bd.boardid=bn.id INNER JOIN tbl_eligibility elig ON bd.deptelig=elig.id 
    INNER JOIN tbl_salaryrange sr ON bd.salaryrange=sr.id INNER JOIN tbl_agerange ar ON bd.agerange=ar.id
    WHERE bd.id = '".$_POST["id"]."' ORDER BY bd.id asc" ; 
	
   
      $rer = mysqli_query($connect, $quer);  
      $row = mysqli_fetch_array($rer);  
     
echo json_encode($row);  
 }  
 ?>