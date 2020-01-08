<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<form id="myForm" method="post" action="multiupload.php" multipart="" enctype="multipart/form-data">
<div class="container">

<div class="row">
<div class="col-sm-4">
<label for="CompanyName">Company Name:</label>
<input type="text" name="CompanyName" class="form-control" /></div><br>
<div class="col-sm-4">
<label for="JobTitle">JobTitle:</label>
<input type="text" name="JobTitle" class="form-control" /></div><br>
<div class="col-sm-4">
<label for="eligibility">Eligibility</label><br>
<!-- <input type="checkbox" name="eligibility[]" value="10th">Tenth<br>
<input type="checkbox" name="eligibility[]" value="12th">Twelth<br>
<input type="checkbox" name="eligibility[]" value="Graduate">Graduate<br> -->
<input type="text" name="eligibility" class="form-control" />
</div></div>
<div class="row">
<div class="col-sm-4">
<label for="joblocation">Job Location:</label>
<input type="text" name="joblocation" class="form-control" /></div><br>
<div class="col-sm-4">
<label for="totalvacancies">Total Vacancies:</label>
<input type="text" name="totalvacancies" class="form-control" /></div><br>
<div class="col-sm-4">
<label for="jobadded">Job Added:</label>
<input type="date" name="Jobadded" class="form-control"  /></div></div><br>
<div class="row">
<div class="col-sm-4">
<label for="lastdate" >Last Date:</label>
<input type="date" name="lastdate" class="form-control" /></div><br>
<div class="col-sm-4">
<label for="state">State</label>
<input type="text" name="state" class="form-control" /></div><br>
<div class="col-sm-4">
<label for="tags">Tags</label>
<input type="text" name="Tags" class="form-control" /></div></div><br>

<div class="row">
<div class="col-sm-4">
<label for="typeofjob">Type-of-job</label>
  <input type="text" name="typeofjob" class="form-control" /></div>
  <div class="col-sm-4">
<label for="Mainlink">Main link of website</label>
  <input type="text" name="mainlink" class="form-control" /></div>
  <div class="col-sm-4">
<label for="pdflink">link of pdf</label>
  <input type="text" name="pdflink" class="form-control" /></div>
  
  </div><br>

  <div class="row">
<div class="col-sm-4">
<label for="Pay">Pay</label>
  <input type="text" name="pay" class="form-control" /></div>
  <div class="col-sm-4">
<label for="lastdateoffee" >last Date of fee</label>
  <input type="date" name="lastdateoffee" class="form-control"/></div>
  <div class="col-sm-4">
  <label for="status" >Status of Application</label>
  <input type="text" name="status" class="form-control"/></div>
</div>
  
  <br>
  
  <div class="row"><div class="col-sm-12">
  <input type="submit" name="submit" value="Submit" class="btn btn-info" onclick="submit()" /></div></div>
  </div>
</form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
function submit() {
  /*Put all the data posting code here*/
 document.getElementById("myForm").reset();
}
</script>
  </body>
</html>

