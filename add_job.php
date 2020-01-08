
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
  <style>
    @media (min-width: 576px){
.form-inline label {
    
  justify-content: end!important;
  margin-bottom:10!important;
}}
    </style>
  </head>
  <body>
<div class="container">
<div class="row test">
  <div class="col-2">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Add_Job</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Gallery</a>
      <a class="nav-link" id="v-pills-view-tab" data-toggle="pill" href="#v-pills-view" role="tab" aria-controls="v-pills-view" aria-selected="false">View Details</a>     
    </div>
  </div>
 
  <div class="col-10 ">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
  <div class="row" >
  <div class="col-sm-12">
      <p>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Job
  </button>
</p>


  <div class="collapse" id="collapseExample">
  <div class="container">
  <form class="form-inline" id="myForm" method="post" action="multiupload.php" multipart="" enctype="multipart/form-data">
  <div class="card card-body">
  
  
  <div class="row">
  <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
  <label for="CompanyName">CompanyName</label>
  <input type="text" name="CompanyName">

  </div>
  <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
  <label for="JobTitle">JobTitle</label>
  <input type="text" name="JobTitle">
  <button id="add">Add</button>
  </div></div> 
<br>
<div class="row">
<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
  <label for="eligibility">eligibility</label>
  <input type="text" name="eligibility">
  </div>
<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
  <label for="joblocation">joblocation</label>
  <input type="text" name="joblocation">
  
</div>
</div> <br>
<div class="row">
<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
  <label for="Jobadded">Jobadded</label>
  <input type="date" name="Jobadded">
  </div>
<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
  <label for="lastdate">lastdate</label>
  <input type="date" name="lastdate">
  </div>
</div> 

<br>
<div class="row">
<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
  <label for="educationqualification">EducationQualification</label>
  <input type="text" name="educationqualification">
  
</div>
<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
  <label for="tags">tags</label>
  <input type="text" name="tags">
  
</div>

</div> 

<br>
<div class="row">
<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
  <label for="typeofjob">typeofjob</label>
  <input type="text" name="typeofjob">
  
</div>
<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
  <label for="mainlink">mainlink</label>
  <input type="text" name="mainlink">
  
</div>

</div> 
<br>
<div class="row">
<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
  <label for="pdflink">pdflink</label>
  <input type="text" name="pdflink">
  
</div>
<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
  <label for="pay">pay</label>
  <input type="text" name="pay">
  
</div>

</div> 
<br>
<div class="row">
<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
  <label for="lastdateoffee">lastdateoffee</label>
  <input type="date" type="text" name="lastdateoffee">
  
</div>
<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
  <label for="status">status</label>
  <input type="text" name="status">
  
</div>

</div> 
<div class="row">
<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
  <label for="totalvacancies">totalvacancies</label>
  <input type="text" name="totalvacancies">
  </div>
  <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
  <label for="imagelink">ImageLink</label>
  <input type="text" name="imagelink">
</div>
</div><br>
<div class="row">
<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
  <label for="state">State</label>
  <input type="text" name="state">
  </div>
  <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
  <label for="howtoapply">How to Apply</label>
  <input type="text" name="howtoapply">
</div>
</div><br>
<div class="row"><div class="col-sm-12">
  <input type="submit" name="submit" value="Submit" class="btn btn-info" onclick="submit()" /></div></div>
  </div>
</div>
</form></div>
</div>
</div>

</div> 
      </div>

      <!-- profile -->
      <!-- new tab -->
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
        <form action="upload_pic.php" method="post" enctype="multipart/form-data">
    Select imag to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload after Image" name="submit">
</form></div>
      
<!-- gallery -->
<!-- new tab -->
<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"> <div class="row">
  <form method="post" action="" multipart="" enctype="multipart/form-data">  
   
    <br />  
    <label>Name</label>  
    <input type="text" name="name" class="form-control" /><br />  
  
    <input type="file" id="image" name="img[]" multiple/>
    <input type="submit" name="submit" value="submit" class="btn btn-info" /><br />                      
  
</form> 
</div>
</div>

      <!-- new tab -->
      <div class="tab-pane fade" id="v-pills-view" role="tabpanel" aria-labelledby="v-pills-settings-tab">
<!-- details -->

<div class="container">
	<div class="row">
	<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Problem</th>
      <th scope="col">Name</th>
      <th scope="col">Number</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>

  <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  
  </tbody>
</table>
	</div>
</div>
<!-- details -->
      </div>
    </div>
  </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.js"></script>
    <script src="dist/extensions/toolbar/bootstrap-table-toolbar.min.js"></script>
    <script src="dist/extensions/filter-control/bootstrap-table-filter-control.min.js"></script>

  
<script>
$(function() {
    var nm = 0;
    $('#add').on('click', function( e ) {
        if(nm%2==0){
        e.preventDefault();
        $('<div/>').addClass( 'new-text-div' )
        .html( $('<input type="textbox" name='+ 'jobtitle' + ++nm + ' placeholder="Add Post Name"/>').addClass( 'someclass' ) )
        .append( $('<button/>').addClass( 'remove' ).text( 'Remove' ) )
        .insertBefore( this );
    }
    else{
      e.preventDefault();
        $('<div/>').addClass( 'new-text-div' )
        .html( $('<input type="textbox" name='+ 'jobtitle' + ++nm + ' placeholder="Number of Posts"/>').addClass( 'someclass' ) )
        .append( $('<button/>').addClass( 'remove' ).text( 'Remove' ) )
        .insertBefore( this ); 
    }
    });
    $(document).on('click', 'button.remove', function( e ) {
        e.preventDefault();
        $(this).closest( 'div.new-text-div' ).remove();
    });
});
</script>


</body>
</html>