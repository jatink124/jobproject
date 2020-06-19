<?php
// Start the session
session_start();
?>
<?php include '../include/connectionstring.php' ?>

<?php include 'isroheader.php' ?>
<?php include '../include/indexnavigation.php' ?>
<?php include 'isrodisplay.php' ?>


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
<?php $filename = "../images/".trim($imagelink[$previd])?>
 <?php  if(file_exists($filename))
{
  $imagelink[$previd] = $imagelink[$previd];         //if image not found this will display
 } else{$imagelink[$previd] = "default.png";}?>
<div class="card" style="width: 50rem;">
 
  <img class="card-img-top" id="detail_img" src="images/<?php echo $imagelink[$previd]?>" alt="<?php echo $tags[$previd] ?>">
  <div class="card-body">
  <p class="card-text show-read-more"><?php echo $mainintro[$previd]?> </p>
   <hr>
  <h3 id="mainqualheading" class="text-center">Post Name:</h3> <h6 id="qualheading" class="text-center"><?php echo $postname[$previd];?></h6>
   <h3 id="mainqualheading" class="text-center">Qualification</h3> <h6 id="qualheading" class="text-center"><?php echo $deptqualification[$previd];?></h6>
   <h3 id="mainqualheading" class="text-center">Number of Posts</h3> <h2 id="qualheading" class="text-center"><?php echo $numberofposts[$previd];?></h2>
  </div>
  
 
    

    <br><hr>
  
  <div class="card-body">
    <a href="<?php echo $MainLink[$previd] ?>" class="btn btn-primary btn-lg" target="_blank">Main Link</a>
    <a href="<?php echo $pdflink[$previd] ?>" class="btn btn-primary btn-lg" target="_blank">Pdf link</a>
  </div>
</div>
</div>
</div>
<?php include '../include/footer.php' ?>