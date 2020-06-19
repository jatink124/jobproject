<?php
// Start the session
session_start();
?>
<?php include 'queries/showresults.php' ?>
<?php include 'resultheader.php' ?>
<?php include '../include/indexnavigation.php' ?>

 
<?php
//fetch.php
$sql = "select tbr.id,tbr.postname,tbr.resboardname,tbr.pdfpath,
tbr.sourceurl,tbr.publisheddate,trc.category from tbl_results tbr inner join tbl_results_category trc
on tbr.category=trc.id";
$resultdataa = mysqli_query($connect, $sql);?>
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
<div class="container-fluid">
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<nav class="white">
    <div class="nav-wrapper">
      <form autocomplete="off" id="form">
        <div class="input-field">
          <input class="srch" id="newsearch" type="search" data-html="true" placeholder="Search your job" data-toggle="popover" title="Find Job" data-content="Enter your 
          Search Term like <b>Latest jobs</b>,<b>jobs after b.tech</b>,<b>jobs after 10th</b>" required>
          <div class="card-panel" id="outputt" style="display:none">
       </div>        
          <i class="material-icons" id="close"></i>
          <div class="card-panel" id="navoutput" style="display:none">
       </div>        
          <i class="material-icons" id="close"></i>
        </div>
      </form>
     
    </div>
  </nav>
</div>
</div>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col" style="width: 9.66%">Post Name</th>
      <th scope="col" style="width: 9.66%">Job Category</th>
      <th scope="col" style="width: 5.66%">Published Date</th>
      <th scope="col" style="width: 9.66%">Result url</th>
      
    </tr>
  </thead>
  <tbody>
 <?php while($row = mysqli_fetch_array($resultdataa)){?>
    <tr>
      <th><?php echo $row["postname"]?></th>
      <td><?php echo $row["category"]?></td>
      <td><?php echo $row["publisheddate"]?></td>
      <td><a href="<?php echo $row["sourceurl"]?>">Go to Source website result</a></td>
    </tr><?php } ?>
 
  </tbody>
</table>

<?php include '../include/footer.php' ?>



   