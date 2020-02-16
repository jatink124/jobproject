<?php include 'queries/select_board_dept.php'?>
<?php include 'queries/dropdown_boardname.php'?>
<?php include './queries/dropdown_elig.php'?>
<?php include './queries/dropdown_salaryrange.php'?>
<?php include './queries/dropdown_agerange.php'?>
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title></title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      <style>
      select#deptselect {
    width: 260px;
}
      </style>
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:700px;">  
           <a href="./modify.php" class="btn btn-primary active" role="button" aria-pressed="true">Index</a> 
                <br />  
                <div class="table-responsive">  
                     <div align="right">  
                          <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning">Add</button>  
                     </div>  
                     <br />  
                     <div id="employee_table">  
                          <table class="table table-bordered">  
                               <tr>  
                                   <th width="5%">id</th>
                                    <th width="70%">Board Name</th>
                                    <th width="70%">Department Name</th> 
                                     
                                    <th width="15%">Edit</th>  
                                    <th width="15%">View</th>  
                               </tr>  
                               <?php  
                              $count=1;
                              while($row = mysqli_fetch_array($resulttt))  
                               {  
                               ?>  
                               <tr>  
                                    <td><?php echo $count; ?></td>
                                    <td><?php echo $row["bname"]; ?></td>
                                    <td><?php echo $row["deptname"]; ?></td>  
                                    <td><input type="button" name="edit" value="Edit" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs edit_data" /></td>  
                                    <td><input type="button" name="view" value="view" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_data" /></td>  
                               </tr>  
                               <?php  
                         $count++;     
                         }  
                               ?>  
                          </table>  
                     </div>  
                </div>  
           </div>  
      </body>  
 </html>  
 <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Employee Details</h4>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">PHP Ajax Update MySQL Data Through Bootstrap Modal</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">  
                          <div class="row"><div class="col-sm-6 col-md-6">
                          <label>Select Board Name</label><br>  
     <select id="deptselect" name="departmentboard"><?php while($boardrow = mysqli_fetch_array($boardresult)){?><option value="<?php echo $boardrow["id"];?>"><?php echo $boardrow["bname"];?></option><?php }?></select> 
                          </div>
                          <div class="col-sm-6 col-md-6">
                          <label>Enter Department Name</label>  
                          <input type="text" name="deptname" id="deptname" class="form-control" /></div></div>  
                          <div class="row"><div class="col-sm-6 col-md-6">
                          <label>Enter Department post name</label>  
                          <input type="text" name="deptpostname" id="deptpostname" class="form-control" /></div>  
                          <div class="col-sm-6 col-md-6">  
                          <label>Enter Number of Posts</label>  
                          <input type="text" name="noofpost" id="noofpost" class="form-control" /></div></div>
                          <div class="row"><div class="col-sm-6 col-md-6">
                          <label>Salary</label>  
                          <input type="text" name="salary" id="salary" class="form-control" /></div>  
                          <div class="col-sm-6 col-md-6">
                          <label>Enter Department Qualification</label>  
                          <input type="text" name="deptqualification" id="deptqualification" class="form-control" /></div></div> 
                          <div class="row"><div class="col-sm-6 col-md-6">
                          <label>Enter Job Role</label>  
                          <input type="text" name="jobrole" id="jobrole" class="form-control" /></div>
                          <div class="col-sm-6 col-md-6"><label>Enter Age Limit</label>  
                          <input type="text" name="agelimit" id="agelimit" class="form-control" /></div></div>
                          <br/> 
                          <div class="row"><div class="col-sm-6 col-md-6">
                          <label>Desired Specialization</label>  
                          <input type="text" name="dsp" id="dsp" class="form-control" /></div>
                          <div class="col-sm-6 col-md-6"><label>Eligibility</label><br>  
     <select id="deptelig" name="deptelig"><?php while($rowelig = mysqli_fetch_array($eligresult)){?><option value="<?php echo $rowelig["id"];?>"><?php echo $rowelig["qual"];?></option><?php }?></select>
                          </div></div>
                          <br/> 
                             <div class="row">
                              <div class="col-sm-6 col-md-6"><label>Salary-range</label><br>  
<select id="salaryrange" name="salaryrange" ><?php while($rowsrange = mysqli_fetch_array($salaryrangeresult)){?><option value="<?php echo $rowsrange["id"];?>"><?php echo $rowsrange["salarycomp"];?></option><?php }?></select>
                              </div>
                              <div class="col-sm-6 col-md-6"><label>Age-range</label><br> 
<select id="agerange" name="agerange"><?php while($rowagerange = mysqli_fetch_array($agerangeresult)){?><option value="<?php echo $rowagerange["id"];?>"><?php echo $rowagerange["agecomp"];?></option><?php }?></select>
                                  
                                  </div>
                         </div>
                              <br/>
                          <input type="hidden" name="id" id="id" />  
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />  
                     </form>  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <script>  
 $(document).ready(function(){  
      $('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#insert_form')[0].reset();  
      });  
      $(document).on('click', '.edit_data', function(){  
           var id = $(this).attr("id");  
          $.ajax({  
                url:"phpcrudmodal/fetch.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"json",  
                success:function(data){  
                    $('#deptselect').val(data.boardid); 
                     $('#deptname').val(data.deptname);  
                     $('#deptpostname').val(data.deptpostname);  
                     $('#noofpost').val(data.posts);  
                     $('#salary').val(data.salary);  
                     $('#deptqualification').val(data.qualification);  
                     $('#jobrole').val(data.jobrole); 
                     $('#agelimit').val(data.agelimit);
                     $('#dsp').val(data.dsp); 
                     $('#deptelig').val(data.elo);
                     $('#salaryrange').val(data.sr);
                     $('#agerange').val(data.agerange);  
                     $('#id').val(data.id);  
                     $('#insert').val("Update");  
                     $('#add_data_Modal').modal('show');  
                }  
           });  
      });  
      $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
           var BoardNamee = $('#deptselect').val();
     var deptname = $('#deptname').val();
   var deptpostname = $('#deptpostname').val();
   var noofpost = $('#noofpost').val();
   var salary = $('#salary').val();
   var deptqualification = $('#deptqualification').val();
   var jobrole = $('#jobrole').val();
   var agelimit = $('#agelimit').val();
   var dsp = $('#dsp').val();
   var deptelig = $('#deptelig').val();
   var salaryrange = $('#salaryrange').val();
   var agerange = $('#agerange').val();
   var id = $('#id').val();  
  
                $.ajax({  
                     url:"phpcrudmodal/insert.php",  
                     method:"POST",  
                    //  data:$('#insert_form').serialize(),  
                     data:{id:id,BoardNamee:BoardNamee,deptname:deptname,deptpostname:deptpostname,noofpost:noofpost,
                    salary:salary,deptqualification:deptqualification,jobrole:jobrole,agelimit:agelimit,dsp:dsp,deptelig:deptelig,salaryrange:salaryrange,agerange:agerange},
                     beforeSend:function(){  
                          $('#insert').val("Inserting");  
                     },  
                     success:function(data){  
                          $('#insert_form')[0].reset();  
                          $('#add_data_Modal').modal('hide');  
                          $('#employee_table').html(data);  
                     }  
                });  
           
      });  
      $(document).on('click', '.view_data', function(){  
           var id = $(this).attr("id");  
           if(id != '')  
           {  
                $.ajax({  
                     url:"phpcrudmodal/select.php",  
                     method:"POST",  
                     data:{id:id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });  
 });  
 </script>