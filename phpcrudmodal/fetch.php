<?php include '../include/connectionstring.php'?>
<?php  
 //fetch.php  
 
 //$connect = mysqli_connect("localhost", "root", "", "findsarkarijob");  
 if(isset($_POST["id"]))  
 {  
     $quer = "SELECT bd.deptname,elig.id elo,bd.deptpostname,bd.posts,bd.salary,bd.qualification,
     bd.jobrole,bd.id,bd.boardid,bd.agelimit,bd.desiredspecialization dsp,bd.tags,bd.toj,bd.state
  FROM tbl_boarddept bd INNER JOIN tbl_boardname bn ON bd.boardid=bn.id INNER JOIN tbl_eligibility elig ON bd.deptelig=elig.id 
    
    WHERE bd.id = '".$_POST["id"]."' ORDER BY bd.id asc" ; 
		if (mysqli_query($connect, $quer)) {
			$res = mysqli_query($connect, $quer);
		} else {
			$res= "Error: " . $quer . "<br>" . mysqli_error($connect);
		}
   
       
      $row = mysqli_fetch_array($res);  
     
echo json_encode($row);  
 }  
 ?>