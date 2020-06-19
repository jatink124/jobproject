<?php
// Start the session
session_start();
?>

<?php include 'ubheader.php' ?>
<?php include '../include/indexnavigation.php' ?>
<?php include 'bankjobdisplay.php' ?>
<?php  require 'FlashMessages.php'; ?>
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
<!-- show data -->
<?php if($anydata==true){ ?>
  <div class="container">
  <?php $initi=0;$k=3;$n=0;$count=($count/3)?>
  <?php  for($i=0;$i<=($count);$i++){if (array_key_exists($initi,$imagelink)){?>
  <div class="row">
  <?php for($j=$initi;$j<$k;$j++)
      {if (array_key_exists($n,$id)){?>
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><div class="card">
<?php $filename = "../images/".trim($imagelink[$j])?>
 <?php  if(file_exists($filename))
{
  $imagelink[$j] = $imagelink[$j];         //if image not found this will display
 } else{$imagelink[$j] = "default.png";}?>
  <img class="card-img-top" data-src="./images/<?php echo $imagelink[$j]?>" alt="<?php echo $tags[$j] ?>">
  <div class="card-body">
  
    <h5 class="card-title"><?php echo $postname[$j]; ?></h5>
    <p class="card-text"><?php echo $mainintro[$j]; ?></p>
   <span><h6>Last Date to apply:</h6><p><b><?php echo $ldtapply[$j]; ?></b></p></span>
    <a id=<?php echo $id[$j]?> href="jobdetail" target="_blank" class="btn btn-primary idex">View Details</a>
    <a href="<?php echo $MainLink[$j] ?>" target="_blank" class="btn btn-primary btn-sm">Main Link</a>
    <a href="<?php echo $pdflink[$j] ?>" target="_blank" class="btn btn-primary btn-sm">Pdf Link</a>
  </div>
</div></div>
<?php $initi=$j;$n=$initi+1; }} ?>
</div>
<?php $initi=$initi+1;$k=$k+3;  }} ?>
<!-- row -->
 </div>
 <?php } else {?>
      <?php   // A session is required
        if (!session_id()) @session_start();

        // Instantiate the class
        $msg = new \Plasticbrain\FlashMessages\FlashMessages();
        // Add a few messages
        $msg->warning('No jobs notification related to Bank present but please select from other jobs ');
        // Display the messages
        $msg->display(); ?>
 <?php include '../alldata.php' ?>
 <?php } ?>

 <?php include '../pages/footer.php' ?>
<?php include '../include/footer.php' ?>



   

