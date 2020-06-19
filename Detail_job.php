
<?php $tr=array("-","_","/"," ",",","&","(",")","."); ?>

<?php
// Start the session
session_start();
$_SESSION['jobnewdett'];
?>

<?php include './include/connectionstring.php' ?>

<?php include 'php_crud/display.php' ?>
<?php include './include/header.php' ?>
<?php include './include/indexnavigation.php' ?>

<?php include 'include/queries/selectboarddept.php' ?>
<!-- <script>
 const params = new URLSearchParams(window.location.search);
 var indexpg = params.get('q');
 if(indexpg!=null){
  document.cookie = "id=; expires=Thu, 01 Jan 1970 00:00:00 GMT";
  document.cookie="id="+indexpg;
 }
</script> -->
<style>
@media only screen and (max-width: 720px){
  td {
    font-size: smaller;
}
h5 {
    font-size: small;
}
th {
    font-size: small;
}
button#desqualbtn {
    font-size: small;
    width: min-content;
}
}
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
  width: 851px;
    height: 220px;
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
/* table code */
.table-dark td, .table-dark th, .table-dark thead th {
    border-color: #454d55;
    font-weight: bolder;
    color: black;
}
ul.a {
  list-style-type: circle;
}
</style>
<div class="container">
<div class="row">
<h5>
<?php 
// $previdd="idvalue";
if(empty($_GET)) {
  foreach($id as $idindex => $indexvalue){
    if($indexvalue==$_COOKIE["id"]){
     
      $previd =$idindex;
    break;
    }}
} 
// else if(!empty($_GET["jd"])){
//    $queryid = $_GET["jd"];
//   //  $newqualname =  $_GET['qual'];

//     foreach($_SESSION["newsearch"] as $result => $key) {
//        if(str_replace($tr,"",$key)==$queryid){
//         $previd = $result+1;
//     }}
//   //  foreach($id as $idindex => $indexvalue){
//   //   if($indexvalue==$queryid){
     
//   //     $previd =$idindex;
//   //   break;
//   //   }}
// } 

else if(!empty($_GET["q"])) {
  $queryid = $_GET["q"];
  foreach($id as $idindex => $indexvalue){
    if($indexvalue==$queryid){
     
      $previd =$idindex;
    break;
    }}
}




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
  <h1></h1>
  <p class="card-text show-read-more"><?php echo $mainintro[$previd]?> </p>
  <?php if($mainpost[$previd]!=""){?>
   <h5><?php echo $boardname[$previd]?> New Recruitment 2020 - Apply for<?php echo $mainpost[$previd]?> recruitment 2020.<?php }?></h5>
    <hr>
    <?php if($Total_Vacancy[$previd]!=""){?>
   <p><?php echo $boardname[$previd]?> has announced a recruitment for filling <?php echo $Total_Vacancy[$previd]?> vacancies. Read official notification before applying for the post.<?php }?></p>
   
    
    
  <?php if($mainqual[$previd]!=""){?>
    <h3 id="mainqualheading"  class="text-center"><?php echo $boardname[$previd];?> Qualification</h3> <h6 id="qualheading" class="card-text f show-read-more">
    <?php echo $mainqual[$previd];?></h6>
  <?php }?>
  <?php if($al[$previd]!=""){?>
    <h3 id="mainqualheading"  class="text-center"><?php echo $boardname[$previd];?> Age Limit</h3> <h6 id="qualheading" class="card-text f show-read-more">
    <?php echo $al[$previd];?></h6>
  <?php }?>
  <?php if($Experience[$previd]!=""){?>
    <h3 id="mainqualheading"  class="text-center"><?php echo $boardname[$previd];?> Experience</h3> <h6 id="qualheading" class="card-text f show-read-more">
    <?php echo $Experience[$previd];?></h6>
  <?php }?>
  
 
  <?php if($Duties[$previd]!=""){?>
    <h3 id="mainqualheading"  class="text-center"><?php echo $boardname[$previd];?> Duties</h3> <h6 id="qualheading" class="text-center">
    <?php echo $Duties[$previd];?></h6>
  <?php }?>
  </div>
 
<ul class="a">
<li><a href="reservebankofindia">Find out Reserve bank of India jobs</a></li>
<li><a href="jobsindelhi">Find jobs in Delhi</a></li>
<li><a href="jobsinKarnataka">Find jobs in Karnataka</a></li>
</ul>
  <div style="overflow-x:auto;"> 
  <table class="table table-bordered table-striped table-dark">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Post Name</th>
      <th scope="col">Eligibility</th>
      <th scope="col">Salary</th>
      <th scope="col">Total Posts</th>
      
    </tr>
  </thead>
  <tbody>
    <tr class="table-danger">
      
      <td> <?php if($mainpost[$previd]!=""){?><h5><?php echo $mainpost[$previd]?><?php }?></h5></td>
      <td><?php if($Eligibility[$previd]!=""){?><?php echo $Eligibility[$previd];?></td><?php }?>
     
      <td > <?php if($gradepay[$previd]!=""){?>
    <?php echo $gradepay[$previd];?>
  <?php }?></td>
      <td><?php if($Total_Vacancy[$previd]!=""){?><?php echo $Total_Vacancy[$previd];?><?php } ?></td>
    </tbody>
</table>
  <?php if(in_array($detboardid[$previd], $deptboardid)){?>
  
   <?php $x=$previd;?>
   <?php $count=1;?>
    <?php  foreach($detboardid as $deptitle => $depvalue){
      if($depvalue==$detboardid[$previd]){?>
 <div style="overflow-x:auto;"> 
  <table class="table table-bordered table-striped table-dark">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Department Name</th>
      <th scope="col">Post Name</th>
      <th scope="col">Desirable Qualification/Experience</th>
      <th scope="col">Agelimit</th>
      <th scope="col">Qualification</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-danger">
      
      <td><?php echo $departname[$x]?></td>
      <td><?php echo $postname[$x];?></td>
     
      <td ><?php if($dsp[$previd]!=""){?><button id = "desqualbtn" data-html="true" type="button" class="btn btn-sm btn-danger" data-container="body" data-toggle="popover" data-placement="left" data-content="<?php echo $dsp[$x];?>">
Click
</button></td><?php } ?>
<td><?php echo $agelimit[$x];?></td>
      <td><button id = "qualbtn" data-html="true" type="button" class="btn btn-sm btn-danger" data-container="body" data-toggle="popover" data-placement="left" data-content="<?php echo $qualification[$x];?>">
  Click
</button>
      </td>
    </tbody>
</table>
</div>

<br><hr>
    <?php $x=$x+1;$count = $count+1; }} ?>
  <?php } ?>
  <?php if($howtoapply[$previd]!=""){?>
    <h3 id="mainqualheading"  class="text-center"><?php echo $boardname[$previd];?> How to Apply</h3> 
    <p><?php echo $howtoapply[$previd];?></p>
  <?php }?>
  <div class="card-body">
    <a href="<?php echo $MainLink[$previd] ?>" class="btn btn-primary btn-lg" target="_blank">Main Link</a>
    <a href="<?php echo $pdflink[$previd] ?>" class="btn btn-primary btn-lg" target="_blank">Pdf link</a>
  </div>
</div>
</div>
</div>
<?php include 'pages/footer.php' ?>
<?php include './include/footer.php' ?>