<?php include '../include/connectionstring.php'?>
<?php include './queries/dropdown_boardname.php'?>
<?php include './queries/dropdown_elig.php'?>
<?php include './queries/dropdown_state.php'?>
<html>
 <head>
  <title>Live Add Edit Delete Datatables Records using PHP Ajax</title>
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  
  <style>
 /* insertdept */
 select#mselect {
    width: 300px;
}
 select#deptselect {
    width: 260px;
}
 /* insertdept */
  body
  {
   margin:0;
   padding:0;
   background-color:#f1f1f1;
  }
  .box
  {
   width:1345px;
   padding:20px;
   background-color:#fff;
   border:1px solid #ccc;
   border-radius:5px;
   margin-top:5px;
   box-sizing:border-box;
  }
  
  </style>
 <!-- scrollable table -->
 <style>
table tbody tr td:first-child {
  background: white;
  position: sticky;
  left: 0;
  box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.4);
}
table tbody tr td:last-child {
  background: white;
  position: sticky;
  right: 0;
  box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.4);
}
.table-responsive {
   
    overflow-x: hidden!important;
}
td { color: black; }
td:nth-child(1) { color: red; }
div#user_data_wrapper {
    margin-top: -35px;
}
table{
   overflow-y:scroll;
   height:500px;
   display:block;
}
table {
  text-align: left;
  position: relative;
  border-collapse: collapse; 
}
th, td {
  padding: 0.25rem;
}
tr.red th {
  background: red;
  color: white;
}
tr.green th {
  background: green;
  color: white;
}
tr.purple th {
  background: purple;
  color: white;
}
th {
  background: white;
  position: sticky;
  top: 0;
  box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.4);
}
th {
  background: white;
  position: sticky;
  top: 0;
  box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.4);
}

div.update {
    width: 250px;
    height: 100px;
    margin: 0;
    padding: 0;
    overflow: auto;
}


   
 </style>
 <!-- scrollable table -->
 </head>
 <body>
  <div class="container box">
  <a href="./modify.php" class="btn btn-primary active" role="button" aria-pressed="true">Index</a>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add Board
  </button><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#depexampleModal">
  Add Department</button>

   <!-- <a class="btn btn-primary" href="./index.php" role="button">Index</a>
   <br /> -->
   <div class="table-responsive" >
   <br />
    <div align="right">
     <button type="button" name="add" id="add" class="btn btn-info">Add</button>
    </div>
    <br />
    <div id="alert_message"></div>
    <table id="user_data" class="table table-bordered table-striped row-border order-column" style="height: 400px;">
     <thead>
      <tr>
       <th>Company Name</th>
       <th>Eligibility</th>
       <th>Job Location</th>
       <th>JobDateAdded</th> 
       <th>JobLastDate</th>
       <th>tags</th>
       <th>Type of Job</th>
       <th>Main Link</th>
       <th>Pdf Link</th>
       <th>LastDateoffee</th>
       <th>Status</th>
       <th>Image Link</th>
       <th>State</th>
       <th>Main Intro</th>
       <th>Post Name</th>
       <th>Total Vacancy</th>
       <th>Grade Pay</th>
       <th>Age Limit</th>
       <th>Qualification</th>
       <th>Experience</th>
       <th>Duties</th>
       <th>How to Apply</th>
       
       <th></th>
      </tr>
     </thead>
    </table>
   </div>
  </div>
 
 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="./php_mysql_edit/queries/add_boardname.php" method="POST">
  <div class="form-group">
  <label for="usr">Board Name:</label>
  <input type="text" name="boardname" class="form-control" id="bname">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

 <!-- Modal -->
 <div class="modal fade" id="depexampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
      <form action="./php_mysql_edit/queries/adddepartment.php" method="POST">
  <div class="row"><div class="col-sm-6">
  <div class="form-group">
  <label for="department_board">Dept-Board:</label>
  <select id="deptselect" name="departmentboard"><?php while($row = mysqli_fetch_array($resultt)){?><option value="<?php echo $row["id"];?>"><?php echo $row["bname"];?></option><?php }?></select>
  </div></div>
  <div class="col-sm-6">
  <div class="form-group">
  <label for="deppost">Deparment Name:</label>
  <input type="text" name="depname" class="form-control" id="deppost">
  </div></div></div>
  <div class="row"><div class="col-sm-6">
  <div class="form-group">
  <label for="departname">Department PostName:</label>
  <input type="text" name="departpostname" class="form-control" id="dname">
  </div></div>
  <div class="col-sm-6">
  <div class="form-group">
  <label for="noofpost">Number of posts:</label>
  <input type="text" name="depnoofpost" class="form-control" id="depnoofpost">
  </div></div></div>
  <div class="row"><div class="col-sm-6">
  <div class="form-group">
  <label for="depsalary">Salary:</label>
  <input type="text" name="depsalary" class="form-control" id="depsalary">
  </div></div>
  <div class="col-sm-6">
  <div class="form-group">
  <label for="depqualification">Department Qualification:</label>
  <input type="text" name="depqualification" class="form-control" id="depqualification">
  </div></div></div>
  <div class="row"><div class="col-sm-6">
  <div class="form-group">
  <label for="deproles">Roles/Responsibilities:</label>
  <input type="text" name="deproles" class="form-control" id="deproles">
  </div></div><div class="col-sm-6">
  <div class="form-group">
  <label for="deproles">Desired Specialization</label>
  <input type="text" name="dsp" class="form-control" id="dsp">
  </div></div></div>
<div class="row"><div class="col-sm-6">
    <div class="form-group">
    <label for="agelimit">Age Limit:</label>
    <input type="text" name="agelimit" class="form-control" id="agelimit">
    </div></div>
    <div class="col-sm-6">
<label for="deptelig">Dept-Board:</label><br>
  <select id="deptelig" name="deptelig"><?php while($roww = mysqli_fetch_array($eligresult)){?><option value="<?php echo $roww["id"];?>"><?php echo $roww["qual"];?></option><?php }?></select></div></div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/3.3.0/js/dataTables.fixedColumns.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
  <script src="doublescroll.js"></script>
 </body>
</html>

<script type="text/javascript" language="javascript" >
 $(document).ready(function(){
  
  fetch_data();

  function fetch_data()
  {
   var dataTable = $('#user_data').DataTable({
      
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "ajax" : {
     url:"php_mysql_edit/fetch.php",
     type:"POST"
    }
    
  });
  }
  
  function update_data(post_id,id, column_name, value)
  {
   $.ajax({
    url:"php_mysql_edit/update.php",
    method:"POST",
    data:{post_id:post_id,id:id, column_name:column_name, value:value},
    success:function(data)
    {
     $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
     $('#user_data').DataTable().destroy();
     fetch_data();
    }
   });
   setInterval(function(){
    $('#alert_message').html('');
   }, 5000);
  }

  $(document).on('blur', '.update', function(){
   var id = $(this).data("id");
   var post_id = $(this).data("post_id");
   var column_name = $(this).data("column");
   var value = $(this).text();
   update_data(post_id,id, column_name, value);
  });
  
  $('#add').click(function(){
   var html = '<tr>';

   html +=  '<td class="dropup" contenteditable name="BoardName" id="data0"><select  id="mselect"><?php while($row = mysqli_fetch_array($addresultt)){?><option value="<?php echo $row["id"];?>"><?php echo $row["bname"];?></option><?php }?></select></td>';
  
   html += '<td contenteditable name="Eligibility" id="data2"></td>';
   html += '<td contenteditable name="JobLocation" id="data3"></td>';
   html += '<td contenteditable name="jobdateadded" id="data4"></td>';
   html += '<td contenteditable name="joblastdate" id="data5"></td>';
   html += '<td contenteditable name="tags" id="data6"></td>';
   html += '<td contenteditable name="typeofjob" id="data7"></td>';
   html += '<td contenteditable name="MainLink" id="data8"></td>';
   html += '<td contenteditable name="pdflink" id="data9"></td>';
   html += '<td contenteditable  name="lastdateoffee" id="data10"></td>';
   html += '<td contenteditable name="status" id="data11"></td>';
   html += '<td contenteditable name="imagelink" id="data12"></td>';
  //  html += '<td contenteditable name="State" id="data13"></td>';
  html +=  '<td contenteditable name="State" id="data13"><select id="stateselect"><?php while($staterow = mysqli_fetch_array($stateresult)){?><option value="<?php echo $staterow["id"];?>"><?php echo $staterow["statename"];?></option><?php }?></select></td>';
   html += '<td contenteditable name="main_intro" id="data14"></td>';
   html += '<td contenteditable name="post_name" id="data15"></td>';
   html += '<td contenteditable name="Total_Vacancy" id="data16"></td>';
   html += '<td contenteditable name="Grade_Pay" id="data17"></td>';
   html += '<td contenteditable name="Age_Limit" id="data18"></td>';
   html += '<td contenteditable name="Qualification" id="data19"></td>';
   html += '<td contenteditable name="Experience" id="data20"></td>';
   html += '<td contenteditable data-placeholder="vfcef" name="Duties" id="data21"></td>';
   html += '<td contenteditable name="Howtoapply" id="data22"></td>';
   html += '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">Insert</button></td>';
   html += '</tr>';
   $('#user_data tbody').prepend(html);
  });
  
  $(document).on('click', '#insert', function(){
   var BoardName = $('#mselect').val();
  //  var CompanyName = $('#data1').text();
   var Eligibility = $('#data2').text();
   var JobLocation = $('#data3').text();
   var jobdateadded = $('#data4').text();
   var joblastdate = $('#data5').text();
   var tags = $('#data6').text();
   var typeofjob = $('#data7').text();
   var MainLink = $('#data8').text();
   var pdflink = $('#data9').text();
   var lastdateoffee = $('#data10').text();
   var status = $('#data11').text();
   var imagelink = $('#data12').text();
   var State = $('#stateselect').val();
   var main_intro = $('#data14').text();
   var post_name = $('#data15').text();
   var Total_Vacancy = $('#data16').text();
   var Grade_Pay = $('#data17').text();
   var Age_Limit = $('#data18').text();
   var Qualification = $('#data19').text();
   var Experience = $('#data20').text();
   var Duties = $('#data21').text();
   var Howtoapply = $('#data22').text();
   
   if(BoardName != '' && Eligibility != '')
   {
    $.ajax({
     url:"php_mysql_edit/insert.php",
     method:"POST",
     data:{BoardName:BoardName, Eligibility:Eligibility,JobLocation:JobLocation,
     jobdateadded:jobdateadded,joblastdate:joblastdate,tags:tags,typeofjob:typeofjob,MainLink:MainLink,pdflink:pdflink,lastdateoffee:lastdateoffee,
     status:status,imagelink:imagelink,State:State,main_intro:main_intro,post_name:post_name,Total_Vacancy:Total_Vacancy,Grade_Pay:Grade_Pay,
     Age_Limit:Age_Limit,Qualification:Qualification,Experience:Experience,Duties:Duties,Howtoapply:Howtoapply},
     success:function(data)
     {
      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 5000);
   }
   else
   {
    alert("Both Fields is required");
   }
  });
  
  $(document).on('click', '.delete', function(){
   var id = $(this).attr("id");
   if(confirm("Are you sure you want to remove this?"))
   {
    $.ajax({
     url:"php_mysql_edit/delete.php",
     method:"POST",
     data:{id:id},
     success:function(data){
      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 5000);
   }
  });
 });
</script>