
<?php
session_start();
$tr=array("-","_","/"," ",",","&","(",")","'",".");$d=0;
    $items = array();
    // $_SESSION["searchh"];
    // $_SESSION["test"];
    // $_SESSION["searchdett"] = array();
    // $_SESSION["jobnewdett"] = array();
    // $_SESSION["searchh"] = array();
    // $searchdetitems= array();
    // $jobdetitems = array();
 
 ?>

<?php include '../include/connectionstring.php'?>
<?php include 'dropdowndisplay.php' ?>
<?php include 'searchheader.php' ?>
<?php include '../queries/dropdown_state.php'?>
<?php include '../include/indexnavigation.php' ?>


<?php include 'queries/dropdown_qual.php'?>
<?php include 'queries/dropdown_typeofjob.php'?>
<?php include 'queries/dropdown_state.php'?>
<?php  require 'FlashMessages.php'; ?>

<!-- show data -->
<style>
@media (min-width: 576px) and (max-width: 991.98px){
  .container.alldatadesk {
display:none;
}
}
@media (max-width: 575px){
  .container.alldatatablet {
display:none;
}
}
@media (min-width: 990.98px){
  .container.alldatatablet {
display:none;
}
}
.card-title {
    margin-bottom:0rem!important;
    height: 60px!important;
    overflow-y: auto!important;
}
p.card-text {
    height: auto;
    overflow-y: hidden;
}
@media only screen and (min-width: 600px){
  .srch {
    display: none;
}
input#navsearch {
    /* margin: 70px 300px; */
    width: 400px;
    color: #c59f09;
    height: 40px;
}
div#output {
    margin: 0px -30px 130px;
}
.container-fluid.fg {
    background-color: darkorchid;
}}
@media only screen and (max-width: 600px){
  input#newsearch {
   display:none;
    /* margin: 70px 10px;
    width: 350px;
    color: #c59f09;
    height: 40px; */
}
div#output {
    margin: -50px -50px 130px;
}
.container-fluid.fg {
    background-color: darkorchid;
}
}
select {
   
    width: 270px;
    border-bottom-left-radius: 6px;
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
    border-bottom-right-radius: 6px;
    height: 50px;
}
</style>
<?php $idvalue=$id[0];$cnt = count($id) ?>
<div class="container" style="margin-bottom:50px;margin-top:30px">
<form action="searchresult" method="post">
<div class="row">
<div class="col-xs col-sm col-md col-lg"><select id="qual" name="qual"> <option value="" selected style="display:none">Select your Qualification</option>
<?php while($qualrow = mysqli_fetch_array($qualresult)){?><option value="<?php echo $qualrow["id"];?>"><?php echo $qualrow["qual"];?></option><?php }?>
</select></div>
<div class="col-xs col-sm col-md col-lg"><select id="toj" name="toj"> <option value="" selected style="display:none">Select Type of Job</option>
<?php while($tojrow = mysqli_fetch_array($tojresult)){?><option value="<?php echo $tojrow["id"];?>"><?php echo $tojrow["tojname"];?></option><?php }?>
</select></div>
<div class="col-xs col-sm col-md col-lg"><select id="state" name="state"> <option value="" selected style="display:none">Select State</option>
<?php while($staterow = mysqli_fetch_array($stateresult)){?><option value="<?php echo $staterow["id"];?>"><?php echo $staterow["statename"];?></option><?php }?>
</select></div>
<div class="col-xs col-sm col-md col-lg"><input class="btn btn-primary btn-lg" type="submit" value="Search"></div>
</div>
</form>
</div>

<!-- show data -->
<?php include './search_output.php';?>
<?php if($anydata==true){ ?>
<div class="container">
  <?php $initi=0;$k=3;$n=0;$count=round($countt/3)?>
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
  <img class="card-img-top" data-src="images/<?php echo $imagelink[$j]?>" alt="<?php echo $tags[$j] ?>">
  <div class="card-body">
  <?php if($bdid[$j]!=null){?>
    <h5 class="card-title"><?php echo $deptpostname[$j]; ?></h5><?php } else { ?>
    <h5 class="card-title"><?php echo $postname[$j]; ?></h5> <?php } ?>
    <p class="card-text show-read-more"> <?php echo $mainintro[$j]; ?><p>Eligibility,Salary,Admit Card,Exam Date,Notification</p></p>
   <span><h6>Last Date to apply:</h6><p><b><?php echo $ldtapply[$j]; ?></b></p></span>
   <?php if($bdid[$j]!=null){?>
<a id=<?php echo $bdid[$j]?> href="latestsearchdetail/<?php echo str_replace($tr,"",$deptpostname[$d]);$_SESSION["searchdett"][$d] = array('deptpostname' => str_replace($tr,"",$deptpostname[$j]),'id' => $bdid[$j]);$d++;$idvalue=$id[$j];?>" class="btn btn-primary idex" target="_blank">View Detail</a>
<?php } else { ?>
    <a id=<?php echo $id[$j]?> href="latestjobdetail/<?php echo str_replace($tr,"",$postname[$d]);$_SESSION["jobnewdett"][$d] = array('postname' => str_replace($tr,"",$postname[$j]),'id' => $id[$j]);$d++;$idvalue=$id[$j];?>" class="btn btn-primary idex" target="_blank">view detail</a><?php $idvalue=$id[$j]; } ?> 
 
    <a href="<?php echo $MainLink[$j] ?>" target="_blank" class="btn btn-primary btn-sm">Main Link</a>
    <a href="<?php echo $pdflink[$j] ?>" target="_blank" class="btn btn-primary btn-sm">Pdf Link</a>
  </div>
</div></div>
<?php $initi=$j;$n=$initi+1; }} ?>
</div>
<?php $initi=$initi+1;$k=$k+3;  }} ?>
<!-- row -->
 </div>
 <?php include '../pages/internallinks.php' ?>
 
 <?php } else {?>
      <?php   // A session is required
        if (!session_id()) @session_start();

        // Instantiate the class
        $msg = new \Plasticbrain\FlashMessages\FlashMessages();
        // Add a few messages
        $msg->warning('No jobs notification  present but please select from following jobs ');
        // Display the messages
        $msg->display(); ?>
        <?php include '../pages/internallinks.php' ?>
        <?php include 'alldata_desk.php' ?>
        <?php include 'alldata_tablet.php' ?>
 <?php } ?>

 <?php include '../pages/footer.php' ?>
 <?php include '../include/footer.php' ?>
 <?php 
    // $_SESSION["searchdet"]=$searchdetitems;
    // $_SESSION["jobnewdet"]=$jobdetitems;
    //  $s=0; $_SESSION["searchh"]=array();n
    // n foreach($_SESSION["jobnewdett"] as $key => $value){ 
    //  n$_SESSION["searchh"][$s] = $value['postname'];
    //  n$_SESSION["searchid"][$s] = $value['id'];
    //  n$s++;}
    //  n$d=0;$_SESSION["deptsearch"]=array(); 
    //  nforeach($_SESSION["searchdett"] as $key => $value){ 
    //   n$_SESSION["deptsearch"][$d] = $value['deptpostname'];
    //   n$_SESSION["deptsearchid"][$d] = $value['id'];
    //   n$d++;}
  
     // $_SESSION["searchh"]=json_encode($_SESSION["searchdett"]);
   
    // $_COOKIE['searchdet']=$searchdetitems;
    // $_COOKIE['jobnewdet']=$jobdetitems;
    // $_SESSION["newsearch"]=$items;
 ?>
 <!-- <script type="text/javascript">var user_id = <?php ?>;
 var search_id = <?php?>;
 setcookie("deptsearchid",search_id, time() + (86400 * 30), "/");not
document.cookie = "deptsearchid" + "=" + search_id + (86400 * 30) + "; path=/";
 function createCookie(name, value, days) {
  var expires;
  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    expires = "; expires=" + date.toGMTString();
  }
  else {
    expires = "";
  }
  document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
}


  createCookie("height",user_id);
  

 console.log(user_id);
 console.log(search_id);

 
 </script> -->



   