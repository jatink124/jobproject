<style>
.latest_news_content {
    font-family: BreveText, helvetica, sans-serif;
    font-family: BreveText, helvetica, sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 30px;
    color: #1a1a1a;
}
.newstitle_heading {
  font-family: "Fira Sans", sans-serif;
    font-style: normal;
    font-weight: 700;
    font-size: 25px;
    line-height: 40px;
    color: #0065a2;
    margin-top: 10px;
    margin-bottom: 15px;
}
</style>

<?php
// include_once './CrudController.php';
// $crudcontroller = new CrudController();
// $result = $crudcontroller->readData();
?>
<?php $qstringlatestnews = $_GET["latestnews"]; ?>
<div class="container-fluid">
<div class="row">
<div class="col-sm-2 col-md-2 d-none d-md-block"><ul class="list-group list-group-flush">
  <li class="list-group-item"><a href="../jobsinbihar" target="_blank" class="list-group-item list-group-item-action">Jobs in Bihar</a></li>
  <li class="list-group-item"><a href="../jobsinNoida" target="_blank" class="list-group-item list-group-item-action">Jobs in Noida</a></li>
  <li class="list-group-item"><a href="../jobsinHyderabad" target="_blank" class="list-group-item list-group-item-action">Jobs in Hyderabad</a></li>
  <li class="list-group-item"><a href="../jobsindelhi" target="_blank" class="list-group-item list-group-item-action">Jobs in Delhi</a></li>
  <li class="list-group-item"><a href="../jobsinBengaluru" target="_blank" class="list-group-item list-group-item-action">Jobs in Bengaluru</a></li>
</ul></div>
<div class="col-sm-8 col-md-8"><div class="latest_news_content">
<?php
if (! empty($arr_latestnews)) {
    foreach ( $arr_latestnews as $k => $v) {
     if($arr_latestnews[$k]["id"]== $qstringlatestnews){  ?>
  <div class="newstitle_heading"><?php echo $arr_latestnews[$k]["news_title"]; ?></div>
   <?php echo $arr_latestnews[$k]["news_intro"]; ?><br><br>
   <?php if($arr_latestnews[$k]["videourl"]!='') { ?> 
   <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $arr_latestnews[$k]["videourl"]; ?>" allowfullscreen></iframe>
  </div><?php } ?>
   <?php echo $arr_latestnews[$k]["newscontent"]; ?><br><br>
  
<?php
    }}
}
?>
</div> </div>
<div class="col-sm-2 col-md-2 d-none d-md-block"><ul class="list-group list-group-flush">
  <li class="list-group-item"><a href="../Engineering-Jobs" target="_blank" class="list-group-item list-group-item-action">Engineering Jobs</a></li>
  <li class="list-group-item"><a href="../reservebi" target="_blank" class="list-group-item list-group-item-action">Reserve Bank of India Jobs</a></li>
  <li class="list-group-item"><a href="../bank-jobs" target="_blank" class="list-group-item list-group-item-action">Bank Jobs</a></li>
  <li class="list-group-item"><a href="../graduation_pass_jobs" target="_blank" class="list-group-item list-group-item-action">Graduation Jobs</a></li>
  <li class="list-group-item"><a href="../10th_pass_jobs" target="_blank" class="list-group-item list-group-item-action">Tenth Jobs</a></li>
</ul></div>
</div>
</div>
<?php include '../pages/footer.php' ?>