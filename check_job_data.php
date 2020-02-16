
<?php include 'include/header.php' ?>
<?php include 'include/navigation.php' ?>
<?php
require_once('database.php');
$res = $database->read();
$json_array = array();
while($r = mysqli_fetch_assoc($res)){
$json_array[] = $r;
}
$finaldata=json_encode($json_array);
// (file_put_contents('d.json', $finaldata))
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
  data-url="main_page_data.json"
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
    <th data-field="qualificationdetails" data-sortable="false">Qualification Details</th>
        <th data-field="agelimit" data-sortable="false">Age Limit</th>
        <th data-field="address" data-sortable="false">Address</th>
        <th data-field="applicationprocedure" data-sortable="false">Application Procedure</th>
        <th data-field="selectionprocedure" data-sortable="false">Selection Procedure</th>
        <th data-field="importantinstruction" data-sortable="false">Important Instruction</th>
        <th data-field="generalcondition" data-sortable="false">General Condition</th>
        </tr>
        </thead>
      
      </table>
</div>

<?php include 'include/footer.php' ?>


</body>
</html>