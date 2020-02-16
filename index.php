<?php
// Start the session
session_start();
?>
<?php include 'pages/getting_data_json.php' ?>
<?php include 'include/header.php' ?>
<?php include 'include/indexnavigation.php' ?>
<?php include 'php_crud/indexdisplay.php' ?>

<!-- show data -->
<style>
.card-title {
    margin-bottom:.1rem!important;
    height: 60px!important;
    overflow-y: auto!important;
}
p.card-text {
    height: auto;
    overflow-y: hidden;
}
</style>
<!-- show data -->

  <div class="container">
  <?php $initi=0;$k=3;$n=0;$count=($count/3)?>
  <?php  for($i=0;$i<=($count);$i++){if (array_key_exists($initi,$imagelink)){?>
  <div class="row">
  <?php for($j=$initi;$j<$k;$j++)
      {if (array_key_exists($n,$id)){?>
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><div class="card">
<?php $filename = "images/".trim($imagelink[$j])?>
 <?php  if(file_exists($filename))
{
  $imagelink[$j] = $imagelink[$j];         //if image not found this will display
 } else{$imagelink[$j] = "default.png";}?>
  <img class="card-img-top" data-src="images/<?php echo $imagelink[$j]?>" alt="<?php echo $tags[$j] ?>">
  <div class="card-body">
  
    <h5 class="card-title"><?php echo $postname[$j]; ?></h5>
    <p class="card-text show-read-more"> <?php echo $mainintro[$j]; ?></p>
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
 
<?php include 'include/footer.php' ?>



   