<?php $tr=array("-","_","/"," ",",","&","(",")"); ?>
<div class="container searchtabs" id="searchtabmob">
<div class="outer"><div class="outertext">Top Trending Categories</div>
  <div class="left"></div>
  <div class="right"></div>
</div>
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#jobsbyeducation" role="tab" aria-controls="pills-home" aria-selected="true">
      Jobs by Education
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#jobsbylocation" role="tab" aria-controls="pills-profile" aria-selected="false">
    Jobs by Location  
  </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#Governmentjobs" role="tab" aria-controls="pills-contact" aria-selected="false">
      Government Jobs</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-govt" role="tab" aria-controls="pills-profile" aria-selected="false">
      Latest Jobs</a>
  </li>
 

</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade" id="jobsbylocation" role="tabpanel" aria-labelledby="pills-home-tab">
    <div class="row"><div class="col-sm-12">
      <ul class="list-group"><div class="row">
      <div class="col-sm-4 qual"><?php $s=1;$_SESSION["state"]=array();?><?php foreach ($statetab as $key => $value){ if($key+1<=20){ ?>
      <li class="list-group-item"><a href="job-location/<?php echo str_replace($tr,"",$value['statename']);$_SESSION["state"][$s] = $value['statename'];$s++;?>" 
      target="_blank" >
        <?php echo $value["statename"];?></a></li><?php }} ?>
      </div>
      <div class="col-sm-4 qual">
      <?php foreach ($statetab as $key => $value){ if($key+1>=21&$key+1<=38){ ?>
      <li class="list-group-item"><a href="job-location/<?php echo str_replace($tr,"",$value['statename']);$_SESSION["state"][$s] = $value['statename'];$s++;?>" 
      target="_blank">
      <?php echo $value["statename"];?></a></li><?php }} ?>
        </div>
        <div class="col-sm-4 qual">
        <?php foreach ($statetab as $key => $value){ if($key+1>=39&$key+1<=60){ ?>
      <li class="list-group-item"><a href="job-location/<?php echo str_replace($tr,"",$value['statename']);$_SESSION["state"][$s] = $value['statename'];$s++;?>" 
      target="_blank">
      <?php echo $value["statename"];?></a></li><?php }} ?>
        </div>
       
       
        </div></ul>
      </div>
      </div></div>
  <div class="tab-pane fade show active" id="jobsbyeducation" role="tabpanel" aria-labelledby="pills-profile-tab">
<div class="row">
<ul class="list-group"><div class="row">
<div class="col-sm-4 qual"><?php $i=0;$_SESSION["qual"]=array();?><?php foreach ($qualtabs as $key => $value){ if($key+1<=10){  ?>
<li class="list-group-item"><a href="qualification/<?php echo str_replace($tr,"",$value['qual']);$_SESSION["qual"][$i] = $value['qual'];$i++;?>" 
target="_blank">
  <?php echo $value["qual"];?></a></li><?php  }} ?>
</div>
<div class="col-sm-4 qual">
<?php foreach ($qualtabs as $key => $value){ if($key+1>=11&$key+1<=19){  ?>
<li class="list-group-item"><a href="qualification/<?php echo str_replace($tr,"",$value['qual']);$_SESSION["qual"][$i] = $value['qual'];$i++;?>" 
target="_blank">
  <?php echo $value["qual"];?></a></li><?php  }} ?>
  </div>
  
  <div class="col-sm-4 qual">
  <?php foreach ($qualtabs as $key => $value){ if($key+1>=20&$key+1<=30){  ?>
<li class="list-group-item"><a href="qualification/<?php echo str_replace($tr,"",$value['qual']);$_SESSION["qual"][$i] = $value['qual'];$i++; ?>" 
target="_blank">
  <?php echo $value["qual"];?></a></li><?php  }} ?>
  </div>
 
  </div>
</ul>
</div></div>
  <div class="tab-pane fade" id="Governmentjobs" role="tabpanel" aria-labelledby="pills-contact-tab">
  <div class="row"><div class="col">
<ul class="list-group"><div class="row">
<div class="col-sm-4 qual"><?php $t=0;$_SESSION["toj"]=array();?><?php foreach ($tojtab as $key => $value){ if($key+1<=13){ ?>
<li class="list-group-item"><a href="type-of-job/<?php echo str_replace($tr,"",$value['tojname']);$_SESSION["toj"][$t] = $value['tojname'];$t++;?>" 
target="_blank">
  <?php echo $value["tojname"];?></a></li><?php }} ?>
</div>
<div class="col-sm-4 qual">
<?php foreach ($tojtab as $key => $value){ if($key+1>=14&$key+1<=26){ ?>
<li class="list-group-item"><a href="type-of-job/<?php echo str_replace($tr,"",$value['tojname']);$_SESSION["toj"][$t] = $value['tojname'];$t++;?>" 
target="_blank">
<?php echo $value["tojname"];?></a></li><?php }} ?>
  </div>
  <div class="col-sm-4 qual">
  <?php foreach ($tojtab as $key => $value){ if($key+1>=27&$key+1<=40){ ?>
<li class="list-group-item"><a href="type-of-job/<?php echo str_replace($tr,"",$value['tojname']);$_SESSION["toj"][$t] = $value['tojname'];$t++;?>" 
target="_blank">
<?php echo $value["tojname"];?></a></li><?php }} ?>
  </div>
 
  </div></ul>
</div>
</div></div>

<!-- postbydesignation -->
<div class="tab-pane fade" id="postbydesignation" role="tabpanel" aria-labelledby="pills-contact-tab">
  <div class="row"><div class="col">
    <ul class="list-group"><div class="row">
    <div class="col"><?php foreach ($latest_bnresult as $key => $value){ if($key+1<=7){ ?>
    <li class="list-group-item"><a href="searchresult?desig=<?php echo $key+1?>" 
    target="_blank">
      <?php echo $value["bname"];?></a></li><?php }} ?>
    </div>
    <div class="col">
    <?php foreach ($latest_bnresult as $key => $value){ if($key+1>=8&$key+1<=14){ ?>
    <li class="list-group-item"><a href="searchresult?desig=<?php echo $key+1?>" 
    target="_blank">
    <?php echo $value["bname"];?></a></li><?php }} ?>
      </div>
      <div class="col">
      <?php foreach ($latest_bnresult as $key => $value){ if($key+1>=15&$key+1<=22){ ?>
    <li class="list-group-item"><a href="searchresult?desig=<?php echo $key+1?>" 
    target="_blank">
    <?php echo $value["bname"];?></a></li><?php }} ?>
      </div>
      <div class="col">
      <?php foreach ($latest_bnresult as $key => $value){ if($key+1>=23&$key+1<=30){ ?>
    <li class="list-group-item"><a href="searchresult?desig=<?php echo $key+1?>" 
    target="_blank">
    <?php echo $value["bname"];?></a></li><?php }} ?>
      </div>
      
    </div></ul>
    </div>
    </div> 
    <!-- end row -->
</div>
<!-- postbydesignation -->

<div class="tab-pane fade" id="pills-govt" role="tabpanel" aria-labelledby="pills-contact-tab">
  <div class="row"><div class="col">
    <ul class="list-group"><div class="row">
    <div class="col-sm-4 qual"><?php $l=0;$_SESSION["bname"]=array();?> <?php foreach ($latest_bnresult as $key => $value){ if($key+1<=12){ ?>
    <li class="list-group-item"><a href="latestjobs/<?php echo str_replace($tr,"",$value['bname']);$_SESSION["bname"][$l] = array('bname' => str_replace($tr,"",$value['bname']),'id' => $value['id']);$l++;?>" 
    target="_blank">
      <?php echo $value["bname"];?></a></li><?php }} ?>
    </div>
    <div class="col-sm-4 qual">
    <?php foreach ($latest_bnresult as $key => $value){ if($key+1>=13&$key+1<=24){ ?>
    <li class="list-group-item"><a href="latestjobs/<?php echo str_replace($tr,"",$value['bname']);$_SESSION["bname"][$l] = array('bname' => str_replace($tr,"",$value['bname']),'id' => $value['id']);$l++;?>" 
    target="_blank">
    <?php echo $value["bname"];?></a></li><?php }} ?>
      </div>
      <div class="col-sm-4 qual">
      <?php foreach ($latest_bnresult as $key => $value){ if($key+1>=25&$key+1<=50){ ?>
    <li class="list-group-item"><a href="latestjobs/<?php echo str_replace($tr,"",$value['bname']);$_SESSION["bname"][$l] = array('bname' => str_replace($tr,"",$value['bname']),'id' => $value['id']);$l++;?>" 
    target="_blank">
    <?php echo $value["bname"];?></a></li><?php }} ?>
      </div>
      
      
    </div></ul>
    </div>
    </div> 
    <!-- end row -->
</div>
</div>
</div>