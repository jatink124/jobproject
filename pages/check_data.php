
<?php include '../include/header.php' ?>
<?php include '../include/navigation.php' ?>
<?php
require_once('../database.php');
$res = $database->read();
$json_array = array();
while($r = mysqli_fetch_assoc($res)){
$json_array[] = $r;
}
$finaldata=json_encode($json_array);
(file_put_contents('../d.json', $finaldata))
?>
  <!-- <div class="container mt-2 mb-2">
  <div id="toolbar">
  <button id="button" class="btn btn-secondary">refreshOptions</button>
</div> -->
<!-- <div id="toolbar">
  <button id="add" class="btn btn-primary">Add New</button>
  <button id="remove" class="btn btn-danger">Remove</button>
  <button id="removeall" class="btn btn-danger">Remove All</button>
</div> -->
  <table 
  id="table"
  data-url="dataa.json"
  data-cache="false"
  data-toggle="table"
  data-toolbar="#toolbar"
  data-pagination="true"
  data-advanced-search="true"
  data-id-table="advancedTable"
  data-filter-control="true"
  data-filter-show-clear="true"
  data-search="true"
  data-height="599"
  data-detail-view="true"
  data-detail-formatter="detailFormatter"
  data-row-attributes="rowAttributes"
  data-show-footer="true">
  <thead>
    <tr>
    <th data-field="action" data-formatter="actionFormatter">Action</th>
    <th data-field="id" data-sortable="true">id</th>   
    <th data-field="CompanyName" data-sortable="true">CompanyName</th>
        <!-- <th data-field="JobTitle" data-sortable="false" data-formatter="colorFormatter" 
        data-footer-formatter="salaryFormatter" >Job-Title</th> -->
       
        <th data-field="post_name" data-sortable="false">Post Name</th>
        <th data-field="main_intro" data-sortable="false">Main Intro</th>
        <th data-field="Eligibility" data-sortable="false">Eligibility</th>
        <th data-field="JobLocation" data-sortable="false">Job-Location</th>
        <th data-field="Total_Vacancy" data-sortable="false">Total-Vacancies</th>
        <th data-field="jobdateadded" data-sortable="false" data-footer-formatter="totalFormatter">Job-Date-Added</th>
        <th data-field="joblastdate" data-sortable="false"
        data-footer-formatter="amountFormatter">Job-Last-Add</th>
        <th data-field="Qualification" data-sortable="false">Educational Qualification</th>
        <th data-field="State" data-sortable="false">State</th>
        <th data-field="tags" data-sortable="false">Tags</th>
        <th data-field="typeofjob" data-sortable="false">Type-of-Job</th>
        <th data-field="MainLink" data-sortable="false">Main-Link</th>
        <th data-field="pdflink" data-sortable="false">Pdf-Link</th> 
        <th data-field="Grade_Pay" data-sortable="false">Pay</th>
        <th data-field="lastdateoffee" data-sortable="false">Last Date of fee</th>
        <th data-field="howtoapply" data-sortable="false">How To Apply</th>
        <th data-field="imagelink" data-sortable="false">Image Link</th>
        <!-- <th data-field="xyz.author" data-sortable="false">xyz</th> -->
   
        </tr>
        </thead>
      
      </table>
</div>

<?php include '../include/footer.php' ?>


</body>
</html>