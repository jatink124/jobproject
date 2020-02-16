<?php
// Start the session
session_start();
?>
<?php include './include/connectionstring.php' ?>
<?php include './pages/getting_data_json.php' ?>
<?php include './include/header.php' ?>
<?php include './include/indexnavigation.php' ?>
<?php include 'php_crud/display.php' ?>
<?php include 'include/queries/selectboarddept.php' ?>

<style>
h3#mainqualheading {
    background-color: #007bff;
    padding: 5px;
    color: aliceblue;
}
h3#eligheading {
    background-color: #007bff;
    padding: 5px;
    color: aliceblue;
}
h4#departheading {
    background-color: #007bff;
    padding: 5px;
    color: aliceblue;
}
h5#qualheading {
    overflow-y: scroll;
    height: 100px;
    }
    .jobspc {
    color: #f1f4f7;
    background-color: #007bff;
    font-size: larger;
}
@media only screen and (min-width: 720px){
#detail_img{
  width: 500px;
    height: 100px;
    align-self: center;
}
hr{
  height: 1px;
    background-color: #aa0707;
    border: none;
}
}
hr{
  height: 1px;
    background-color: red;
    border: none;
}
</style>
<div class="container">
<div class="row">
<h5>
<?php 
// $previdd="idvalue";
foreach($id as $idindex => $indexvalue){
  if($indexvalue==$_COOKIE["id"]){
   $previd =$idindex;
  break;
  }}


?>

</h5>
<?php $filename = "images/".trim($imagelink[$previd])?>
 <?php  if(file_exists($filename))
{
  $imagelink[$previd] = $imagelink[$previd];         //if image not found this will display
 } else{$imagelink[$previd] = "default.png";}?>
<div class="card" style="width: 50rem;">
 
  <img class="card-img-top" id="detail_img" src="images/<?php echo $imagelink[$previd]?>" alt="<?php echo $tags[$previd] ?>">
  <div class="card-body">
  <p class="card-text show-read-more"><?php echo $mainintro[$previd]?> </p>
   
    <hr>
    <?php if($Eligibility[$previd]!=""){?>
    <p class="card-text"><h3 id="eligheading" class="text-center">Eligibility</h3><h6 id="qualheading" class="text-center"> 
    <hr><?php echo $Eligibility[$previd];?></h6></p><?php }?>
  <?php if($mainqual[$previd]!=""){?>
    <h3 id="mainqualheading"  class="text-center">Qualification</h3> <h6 id="qualheading" class="text-center">
    <?php echo $mainqual[$previd];?></h6>
  <?php }?>
  <?php if($al[$previd]!=""){?>
    <h3 id="mainqualheading"  class="text-center">Age Limit</h3> <h6 id="qualheading" class="text-center">
    <?php echo $al[$previd];?></h6>
  <?php }?>
  <?php if($Experience[$previd]!=""){?>
    <h3 id="mainqualheading"  class="text-center">Experience</h3> <h6 id="qualheading" class="text-center">
    <?php echo $Experience[$previd];?></h6>
  <?php }?>
  <?php if($howtoapply[$previd]!=""){?>
    <h3 id="mainqualheading"  class="text-center">How to Apply</h3> <h6 id="qualheading" class="text-center">
    <?php echo $howtoapply[$previd];?></h6>
  <?php }?>
  <?php if($gradepay[$previd]!=""){?>
    <h3 id="mainqualheading"  class="text-center">Salary</h3> <h6 id="qualheading" class="text-center">
    <?php echo $gradepay[$previd];?></h6>
  <?php }?>
  <?php if($Duties[$previd]!=""){?>
    <h3 id="mainqualheading"  class="text-center">Duties</h3> <h6 id="qualheading" class="text-center">
    <?php echo $Duties[$previd];?></h6>
  <?php }?>
  </div>
  
  <?php if(in_array($detboardid[$previd], $deptboardid)){?>
  
   <?php $x=$previd;?>
   <?php $count=1;?>
    <?php  foreach($detboardid as $deptitle => $depvalue){
      if($depvalue==$detboardid[$previd]){?>
   
   <h4 id="departheading" class="text-center">Department - <?php echo $count;?><br><?php echo $departname[$x]?></h4>
   <h5 id="departheading" class="text-center">Post Name:<?php echo $postname[$x];?></h5><br>
   <?php if($dsp[$x]!=""){?>
    <h3 id="mainqualheading"  class="text-center">Desirable Qualification/Experience</h3> <h6 id="qualheading" class="text-center">
    <?php echo $dsp[$x];?></h6>
  <?php }?>
  <?php if($agelimit[$x]!=""){?>
  <h3 id="mainqualheading"  class="text-center">Age Limit</h3> <h6 id="qualheading" class="text-center">
    <?php echo $agelimit[$x];?></h6><?php }?>
    <h3 id="mainqualheading" class="text-center">Qualification</h3> <h6 id="qualheading" class="text-center"><?php echo $qualification[$x];?></h6><br>

    <br><hr>
    <?php $x=$x+1;$count = $count+1; }} ?>
  <?php } ?>
  <div class="card-body">
    <a href="<?php echo $MainLink[$previd] ?>" class="btn btn-primary btn-lg" target="_blank">Main Link</a>
    <a href="<?php echo $pdflink[$previd] ?>" class="btn btn-primary btn-lg" target="_blank">Pdf link</a>
  </div>
</div>
</div>
</div>
<?php include './include/footer.php' ?>