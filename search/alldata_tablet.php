<?php 

$tr=array("-","_","/"," ",",","&","(",")","'");$d=0;
?>
<div class="container alldatatablet">
  <?php $initi=0; $k=2;$n=0;$count=($count+5)?>
  <?php  for($i=0;$i<=($count);$i++){if (array_key_exists($initi,$imagelink)){?>
  <div class="row">
  <?php for($j=$initi;$j<$k;$j++)
      {if (array_key_exists($n,$id)){?>
  <div class="col-xs-4 col-sm-4 col-md-6 col-lg-4"><div class="card">
<?php $filename = "../images/".trim($imagelink[$j])?>
 <?php  if(file_exists($filename))
{
  $imagelink[$j] = $imagelink[$j];         //if image not found this will display
 } else{$imagelink[$j] = "default.png";}?>
  <img class="card-img-top" data-src="./images/<?php echo $imagelink[$j]?>" alt="<?php echo $tags[$j] ?>">
  <div class="card-body">
  
    <h5 class="card-title"><?php echo $postname[$j]; ?></h5>
    <p class="card-text show-read-more"> <?php echo $mainintro[$j]; ?><p>Eligibility,Salary,Admit Card,Exam Date,Notification</p></p>
   <span><h6>Last Date to apply:</h6><p><b><?php echo $ldtapply[$j]; ?></b></p></span>
   <a id=<?php echo $id[$j]?> href="latestjobdetail/<?php echo str_replace($tr,"",$postname[$d]);$_SESSION["jobnewdett"][$d] = array('postname' => str_replace($tr,"",$postname[$j]),'id' => $id[$j]);$d++;$idvalue=$id[$j];?>" class="btn btn-primary idex" target="_blank">view detail</a><?php $idvalue=$id[$j]; ?>
    <a href="<?php echo $MainLink[$j] ?>" target="_blank" class="btn btn-primary btn-sm">Main Link</a>
    <a href="<?php echo $pdflink[$j] ?>" target="_blank" class="btn btn-primary btn-sm">Pdf Link</a>
  </div>
</div></div>
<?php $initi=$j;$n=$initi+1; }} ?>
</div>
<?php $initi=$initi+1;$k=$k+2;  }} ?>
<!-- row -->
 </div>