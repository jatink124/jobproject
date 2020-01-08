

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
    <link href="dist/bootstrap-table.min.css" rel="stylesheet"/>
    <link href="dist/extentions/filter-control/bootstrap-table-filter-control.min.css" rel="stylesheet"/>
    

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
  <a href="index.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Primary link</a>
</div>
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
       
        <th data-field="JobTitle" data-sortable="false">Job-Title</th>
        <th data-field="main_intro" data-sortable="false">Main Intro</th>
        <th data-field="Eligibility" data-sortable="false">Eligibility</th>
        <th data-field="JobLocation" data-sortable="false">Job-Location</th>
        <th data-field="TotalVacancies" data-sortable="false">Total-Vacancies</th>
        <th data-field="jobdateadded" data-sortable="false" data-footer-formatter="totalFormatter">Job-Date-Added</th>
        <th data-field="joblastdate" data-sortable="false"
        data-footer-formatter="amountFormatter">Job-Last-Add</th>
        <th data-field="educationqualification" data-sortable="false">Educational Qualification</th>
        <th data-field="State" data-sortable="false">State</th>
        <th data-field="tags" data-sortable="false">Tags</th>
        <!-- <th data-field="typeofjob" data-sortable="false">Type-of-Job</th>
        <th data-field="MainLink" data-sortable="false">Main-Link</th>-->
        <th data-field="pdflink" data-sortable="false">Pdf-Link</th> 
        <th data-field="Pay" data-sortable="false">Pay</th>
        <th data-field="lastdateoffee" data-sortable="false">Last Date of fee</th>
        <th data-field="howtoapply" data-sortable="false">How To Apply</th>
        <th data-field="imagelink" data-sortable="false">Image Link</th>
        <th data-field="xyz.author" data-sortable="false">xyz</th>
   
        </tr>
        </thead>
      
      </table>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.js"></script>
    <script src="dist/extensions/toolbar/bootstrap-table-toolbar.min.js"></script>
    <script src="dist/extensions/filter-control/bootstrap-table-filter-control.min.js"></script>
    <script>
  
  function rowAttributes(row, index) {
    return {
      
      'data-content': [
        'Index: ' + index,
       ].join(', ')
   
    }
  
  }

  function actionFormatter(index,row){
   
    var ind = rowAttributes();
    $('#table').on('post-body.bs.table', function (e){
   console.log(e);
    })
  var html=[]
  $.each(row, function(key,value){
   if(key=='id'){
      
      html.push('<a class="edit" href="edit.php?edit='+value+'" title="edit"><i class="fa fa-edit"></i></a>')
      html.push('<a class="remove" href="delete.php?remove='+value+'" title="Remove"><i class="fa fa-trash"></i></a>')

    }
  })

  return html.join('')
}
  $(function() {
    $('#table').on('post-body.bs.table', function (e) {
      $('[data-toggle="popover"]').popover()
    })
  })
</script>
  <script>
  function detailFormatter(index, row){
    var html=[]
    $.each(row, function(Key,value){
      html.push('<p class="row" style="width:100%"><b class="col-md-2">'+ Key +'</b><span class="col-md-10">: '+ value +'</span></p>')
    console.log(index);
    })
    return html.join('')
  }
  function totalFormatter(){
    return 'Total';
  }
function amountFormatter(data){
  return data.length;
}
function salaryFormatter(data){
  var field = this.field
  return '$' + data.map(function(row){
    return +row[field].substring(1)
  }).reduce(function(sum,i){
    return sum+i
  },0)
  }
  function colorFormatter(value){
    var color = '#' + Math.floor(Math.random() * 6777215).toString(16)
    return  '<div style="color: ' + color + '">' +
    '<i class="fa fa-dollar-sign"></i>' +
    value.substring(1) + 
    '</div>'
  }
  
  
  


  </script>

<script>
  var $table = $('#table')
  var $button = $('#button')

  $(function() {
    $button.click(function () {
      $table.bootstrapTable('refreshOptions', {
        showColumns: true,
        search: true,
        showRefresh: true,
        url: 'dataa.json'
      })
    })
  })
</script> 


</body>
</html>