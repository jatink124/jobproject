<?php
// Start the session
session_start();
?>
<?php include 'queries/showresults.php' ?>
<?php include 'resultheader.php' ?>
<?php include '../include/indexnavigation.php' ?>


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
<?php if($_GET) { $resultqs= $_GET["s"]; } ?>
<?php if(empty($_GET)) { if($pdfp[$_COOKIE["resultid"]]!='') {?>
<embed src="resultsfolder/pdf/<?php  echo $pdfp[$_COOKIE["resultid"]]  ?>#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="80%" height="400px" /><?php } ?>
<h5>Soure of Result:<a href="<?php echo $pdfsrc[$_COOKIE["resultid"]] ?>" target="_blank"><?php echo $postname[$_COOKIE["resultid"]] ?></a></h5><?php } else {?>
<?php if($pdfp[$resultqs]) {?>
<embed src="resultsfolder/pdf/<?php echo $pdfp[$resultqs] ?>#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="80%" height="400px" /><?php } ?>
<h5>Soure of Result:<a href="<?php echo $pdfsrc[$resultqs] ?>"><?php echo $postname[$resultqs] ?></a></h5><?php } ?>
<?php include '../include/footer.php' ?>



   