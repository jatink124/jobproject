<?php
// Start the session
session_start();
?>

<?php include 'resultheader.php' ?>
<?php include '../include/indexnavigation.php' ?>
<?php include './queries/dropdown_resultscategory.php'?>

<!-- show data -->
<style>
.card-title {
    margin-bottom: .75rem;
    height: 60px!important;
    overflow-y: auto!important;
}
p.card-text {
    height: 100px;
    overflow-y: hidden;
}
</style>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add Board</button>
 
 
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
      <form action="./queries/addresultquer.php" method="POST">
  <div class="form-group">
  <div class="row"><div class="col-sm-6">
  <label for="resboardname">Result Board Name:</label>
  <input type="text" name="resboardname" class="form-control" id="resboardname"></div>
  <div class="col-sm-6"><label for="pdfpath">PDF Path:</label>
  <input type="text" name="pdfpath" class="form-control" id="pdfpath"></div></div>
  <div class="row"><div class="col-sm-6">  <label for="sourceurl">Source Url:</label>
  <input type="text" name="sourceurl" class="form-control" id="sourceurl"></div>
  <div class="col-sm-6"><label for="postname">Post Name:</label>
  <input type="text" name="postname" class="form-control" id="postname"></div></div>
  <div class="row"><div class="col-sm-6"><label for="category">Category:</label>
  <select id="resultcategory" name="resultcategory"><?php while($row = mysqli_fetch_array($categoryresult)){?><option value="<?php echo $row["id"];?>"><?php echo $row["category"];?></option><?php }?></select></div>
  <div class="col-sm-6"><label for="publisheddate">Published Date:</label>
  <input type="text" name="publisheddate" class="form-control" id="publisheddate"></div></div>
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
<?php include '../include/footer.php' ?>