<?php include '../include/connectionstring.php'?>
  <?php  
 if(isset($_POST["id"]))  
 {  
      $output = '';  
     
      // $connect = mysqli_connect("localhost", "root", "", "findsarkarijob");  
      $query = "SELECT * FROM tbl_boarddept WHERE id = '".$_POST["id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Department Name</label></td>  
                     <td width="70%">'.$row["deptname"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Department Post Name</label></td>  
                     <td width="70%">'.$row["deptpostname"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Number of Posts</label></td>  
                     <td width="70%">'.$row["posts"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Salary</label></td>  
                     <td width="70%">'.$row["salary"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Department Qualification</label></td>  
                     <td width="70%">'.$row["qualification"].' Year</td>  
                </tr>
                <tr>  
                     <td width="30%"><label>Job Role</label></td>  
                     <td width="70%">'.$row["jobrole"].' Year</td>  
                </tr>    
           ';  
      }  
      $output .= '  
           </table>  
      </div>  
      ';  
      echo $output;  
 }  
 ?>
 