<?php
// Start the session
session_start();
?>
<?php
   include('./authentication/session.php');
?>
<?php include 'pages/getting_data_json.php' ?>
<?php include 'include/header.php' ?>
<?php include 'include/navigation.php' ?>
<?php include 'php_crud/indexdisplay.php' ?>

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
<!-- show data -->
<a href = "./authentication/logout.php">Sign Out</a>
  <div class="container">
<div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><div class="card">
    <?php $_SESSION["id"]=0; ?>
  <img class="card-img-top" src="images/<?php echo $imagelink[0]?>" alt="<?php echo $tags[0] ?>">
  <div class="card-body">
  
    <h5 class="card-title"><?php echo $postname[0]; ?></h5>
    <p class="card-text"><?php echo $mainintro[0]; ?></p>
   
    <a id=<?php echo $id[0]?> href="Detail_job.php" target="_blank" class="btn btn-primary idex">View Details</a>
    <a href="<?php echo $MainLink[0] ?>" target="_blank" class="btn btn-primary">Main Link</a>
    <a href="<?php echo $pdflink[0] ?>" target="_blank" class="btn btn-primary">Pdf Link</a>
  
  </div>
</div></div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><div class="card">
<?php $_SESSION["id"]=1; ?>
  <img class="card-img-top" src="images/<?php echo $imagelink[1]?>" alt="<?php echo $tags[1] ?>">
  <div class="card-body">
    <h5 class="card-title"><?php echo $postname[1]; ?></h5>
    <p class="card-text"><?php echo $mainintro[1]; ?></p>
    
    <a id=<?php echo $id[1]?> href="Detail_job.php" target="_blank" class="btn btn-primary idex">View Details</a>
    <a href="<?php echo $MainLink[1] ?>" target="_blank" class="btn btn-primary">Main Link</a>
    <a href="<?php echo $pdflink[1] ?>" target="_blank" class="btn btn-primary">Pdf Link</a>
 
  </div>
</div></div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><div class="card">
    <?php $_SESSION["id"]=2; ?>
    <img class="card-img-top" src="images/<?php echo $imagelink[2]?>" alt="<?php echo $tags[2] ?>">
  <div class="card-body">
    <h5 class="card-title"><?php echo $postname[2]; ?></h5>
    <p class="card-text"><?php echo $mainintro[2]; ?></p>
   
    <a id=<?php echo $id[2]?> href="Detail_job.php" target="_blank" class="btn btn-primary idex">View Details</a>
    <a href="<?php echo $MainLink[2] ?>" target="_blank" class="btn btn-primary">Main Link</a>
    <a href="<?php echo $pdflink[2] ?>" target="_blank" class="btn btn-primary">Pdf Link</a>
   
  </div>
</div>
</div>


 </div>

 <div class="row">
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><div class="card">
  <?php $_SESSION["id"]=3; ?>
    <img class="card-img-top" src="images/<?php echo $imagelink[3]?>" alt="<?php echo $tags[3] ?>">
      <div class="card-body">
        <h5 class="card-title"><?php echo $postname[3]; ?></h5>
        <p class="card-text"><?php echo $mainintro[3]; ?></p>
     
   
    <a id=<?php echo $id[3]?> href="Detail_job.php" target="_blank" class="btn btn-primary idex">View Details</a>
        <a href="<?php echo $MainLink[3] ?>" target="_blank" class="btn btn-primary">Main Link</a>
        <a href="<?php echo $pdflink[3] ?>" target="_blank" class="btn btn-primary">Pdf Link</a>
       
      </div>
    </div>
    </div> 
  
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><div class="card">
  <?php $_SESSION["id"]=4; ?>
  <img class="card-img-top" src="images/<?php echo $imagelink[4]?>" alt="<?php echo $tags[4] ?>">
  <div class="card-body">

    <h5 class="card-title"><?php echo $postname[4]; ?></h5>
    <p class="card-text"><?php echo $mainintro[4]; ?></p>
  
    <a id=<?php echo $id[4]?> href="Detail_job.php" target="_blank" class="btn btn-primary idex">View Details</a>
    <a href="<?php echo $MainLink[4] ?>" target="_blank" class="btn btn-primary">Main Link</a>
    <a href="<?php echo $pdflink[4] ?>" target="_blank" class="btn btn-primary">Pdf Link</a>
    
  </div>
</div></div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><div class="card">
<?php $_SESSION["id"]=5; ?>
  <img class="card-img-top" src="images/<?php echo $imagelink[5]?>" alt="<?php echo $tags[5] ?>">
  <div class="card-body">
 
  <h5 class="card-title"><?php echo $postname[5]; ?></h5>
    <p class="card-text"><?php echo $mainintro[5]; ?></p>
    <a id=<?php echo $id[5]?> href="Detail_job.php" target="_blank" class="btn btn-primary idex">View Details</a>
    <a href="<?php echo $MainLink[5] ?>" target="_blank" class="btn btn-primary">Main Link</a>
    <a href="<?php echo $pdflink[5] ?>" target="_blank" class="btn btn-primary">Pdf Link</a>

  </div>
</div></div>
  
</div>
<div class="row">
 <?php if (array_key_exists(6,$imagelink)){?>
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><div class="card">
  <?php $_SESSION["id"]=6; ?>
    <img class="card-img-top" src="images/<?php echo $imagelink[6]?>" alt="<?php echo $tags[6] ?>">
  <div class="card-body">
  <h5 class="card-title"><?php echo $postname[6]; ?></h5>
    <p class="card-text"><?php echo $mainintro[6]; ?></p>
  
    <a id=<?php echo $id[6]?> href="Detail_job.php" target="_blank" class="btn btn-primary idex">View Details</a>
    
    <a href="<?php echo $MainLink[6] ?>" target="_blank" class="btn btn-primary">Main Link</a>
    <a href="<?php echo $pdflink[6] ?>" target="_blank" class="btn btn-primary">Pdf Link</a>
   
  </div>
</div>
 </div><?php }?>
 <?php if (array_key_exists(7,$imagelink)){?>
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><div class="card">
  <?php $_SESSION["id"]=7; ?>
    <img class="card-img-top" src="images/<?php echo $imagelink[7]?>" alt="<?php echo $tags[7] ?>">
      <div class="card-body">
      <h5 class="card-title"><?php echo $postname[7]; ?></h5>
    <p class="card-text"><?php echo $mainintro[7]; ?></p>
   
    <a id=<?php echo $id[7]?> href="Detail_job.php" target="_blank" class="btn btn-primary idex">View Details</a>
    <a href="<?php echo $MainLink[7] ?>" target="_blank" class="btn btn-primary">Main Link</a>
    <a href="<?php echo $pdflink[7] ?>" target="_blank" class="btn btn-primary">Pdf Link</a>
   
      </div>
    </div>
 </div><?php } ?>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div> 
      
</div>

 </div>
 
<?php include 'include/footer.php' ?>



   