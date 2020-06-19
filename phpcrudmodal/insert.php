<?php include '../include/connectionstring.php'?>
<?php  
 
 //$connect = mysqli_connect("localhost", "root", "", "findsarkarijob");  
 if(!empty($_POST))  
 {  
      $output = '';  
      $message = '';  
      $toj = '';
      foreach($_POST["toj"] as $row)
      {
       $toj .= $row . ',';
      }
      $toj = substr($toj, 0, -2); 
      $state = '';
      foreach($_POST["state"] as $row)
      {
       $state .= $row . ',';
      }
      $state = substr($state, 0, -2);  
     $departmentboard = mysqli_real_escape_string($connect, $_POST["BoardNamee"]);   
     $deptname = mysqli_real_escape_string($connect, $_POST["deptname"]);  
      $deptpostname = mysqli_real_escape_string($connect, $_POST["deptpostname"]);  
      $numberofposts = mysqli_real_escape_string($connect, $_POST["noofpost"]);  
      $salary = mysqli_real_escape_string($connect, $_POST["salary"]);  
      $deptqualification = mysqli_real_escape_string($connect, $_POST["deptqualification"]); 
      $jobrole = mysqli_real_escape_string($connect, $_POST["jobrole"]);
      $agelimit = mysqli_real_escape_string($connect, $_POST["agelimit"]); 
      $dsp = mysqli_real_escape_string($connect, $_POST["dsp"]);  
      $tags = mysqli_real_escape_string($connect, $_POST["tags"]);
      $deptelig = mysqli_real_escape_string($connect, $_POST["deptelig"]);
      $toj = mysqli_real_escape_string($connect, $toj); 
      $state = mysqli_real_escape_string($connect, $state);  
     if($_POST["id"] != '')  
      {  
           $query = "  
           UPDATE tbl_boarddept   
           SET boardid='$departmentboard', 
            deptname='$deptname',   
           deptpostname='$deptpostname',   
           posts='$numberofposts',   
           salary = '$salary',   
           qualification = '$deptqualification',
           jobrole = '$jobrole',
           agelimit = '$agelimit',
           desiredspecialization = '$dsp',
           deptelig = '$deptelig',
           tags = '$tags',
           toj = '$toj',
           state='$state'
           WHERE id='".$_POST["id"]."'";  
           $message = 'Data Updated';  
      }  
      else  
      {  
           $query = "  
           INSERT INTO tbl_boarddept(deptname,deptpostname,posts,salary,qualification,jobrole,agelimit,desiredspecialization,deptelig)  
           VALUES('$deptname', '$deptpostname', '$numberofposts', '$salary', '$deptqualification','$jobrole','$agelimit','$dsp','$deptelig','$tags');  
           ";  
           $message = 'Data Inserted';  
      }  
      if(mysqli_query($connect, $query))  
      {  
           $output .= '<label class="text-success">' . $message . '</label>';  
           $select_query = "SELECT * FROM tbl_boarddept ORDER BY id asc";  
           $result = mysqli_query($connect, $select_query);  
           $output .= '  
                <table class="table table-bordered">  
                     <tr>  
                          <th width="70%">Department Name</th>  
                          <th width="15%">Edit</th>  
                          <th width="15%">View</th>  
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>' . $row["deptname"] . '</td>  
                          <td><input type="button" name="edit" value="Edit" id="'.$row["id"] .'" class="btn btn-info btn-xs edit_data" /></td>  
                          <td><input type="button" name="view" value="view" id="' . $row["id"] . '" class="btn btn-info btn-xs view_data" /></td>  
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
      }  
     else{
          echo "Error: " . $query . "<br>" . mysqli_error($connect);
     }
      echo $output;  
 }  
 echo "<meta http-equiv='refresh' content='0'>";
 ?>
 