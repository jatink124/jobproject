<?php $tr=array("-","_","/"," ",",","&","(",")"); ?>
<div class="container searchtabs desk" id="searchtabdesk">
<div class="outer"><div class="outertext">Top Trending Categories</div>
  <div class="left"></div>
  <div class="right"></div>
</div>
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#jobsbyeducation-desk" role="tab" aria-controls="pills-home" aria-selected="true">
      Jobs by Education
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#jobsbylocation-desk" role="tab" aria-controls="pills-profile" aria-selected="false">
    Jobs by Location  
  </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#Governmentjobs-desk" role="tab" aria-controls="pills-contact" aria-selected="false">
      Government Jobs</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#latest-govt-desk" role="tab" aria-controls="pills-profile" aria-selected="false">
      Latest Jobs</a>
  </li>
 

</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade" id="jobsbylocation-desk" role="tabpanel" aria-labelledby="pills-home-tab">
    <div class="row"><div class="col-sm-12">
      <ul class="list-group"><div class="row">
      <div class="col-sm-2 qual"><?php $s=0;$_SESSION["state"]=array();?><?php foreach ($statetab as $key => $value){ if($key+1<=13){ ?>
      <li class="list-group-item"><a href="job-location/<?php echo str_replace($tr,"",$value['statename']);$_SESSION["state"][$s] = $value['statename'];$s++;?>" 
      target="_blank" >
        <?php echo $value["statename"];?></a></li><?php }} ?>
      </div>
      <div class="col-sm-2 qual">
      <?php foreach ($statetab as $key => $value){ if($key+1>=14&$key+1<=25){ ?>
      <li class="list-group-item"><a href="job-location/<?php echo str_replace($tr,"",$value['statename']);$_SESSION["state"][$s] = $value['statename'];$s++;?>" 
      target="_blank">
      <?php echo $value["statename"];?></a></li><?php }} ?>
        </div>
        <div class="col-sm-2 qual">
        <?php foreach ($statetab as $key => $value){ if($key+1>=26&$key+1<=37){ ?>
      <li class="list-group-item"><a href="job-location/<?php echo str_replace($tr,"",$value['statename']);$_SESSION["state"][$s] = $value['statename'];$s++;?>" 
      target="_blank">
      <?php echo $value["statename"];?></a></li><?php }} ?>
        </div>
        <div class="col-sm-2 qual">
        <?php foreach ($statetab as $key => $value){ if($key+1>=38&$key+1<=49){ ?>
      <li class="list-group-item"><a href="job-location/<?php echo str_replace($tr,"",$value['statename']);$_SESSION["state"][$s] = $value['statename'];$s++;?>" 
      target="_blank">
      <?php echo $value["statename"];?></a></li><?php }} ?>
        </div>
        <div class="col-sm-2 qual">
        <?php foreach ($statetab as $key => $value){ if($key+1>=50&$key+1<60){ ?>
      <li class="list-group-item"><a href="job-location/<?php echo str_replace($tr,"",$value['statename']);$_SESSION["state"][$s] = $value['statename'];$s++;?>" 
      target="_blank">
      <?php echo $value["statename"];?></a></li><?php }} ?>
        </div>
       
       
        </div></ul>
      </div>
      </div></div>
  <div class="tab-pane fade show active" id="jobsbyeducation-desk" role="tabpanel" aria-labelledby="pills-profile-tab">
<div class="row">
<ul class="list-group"><div class="row">
<div class="col-sm-2 qual">
<?php $i=0;$_SESSION["qual"]=array();?><?php foreach ($qualtabs as $key => $value){ if($key+1<=6){  ?>
<li class="list-group-item"><a href="qualification/<?php echo str_replace($tr,"",$value['qual']);$_SESSION["qual"][$i] = $value['qual'];$i++;?>" 
target="_blank">
  <?php echo $value["qual"];?></a></li><?php  }} ?>
</div>
<div class="col-sm-2 qual">
<?php foreach ($qualtabs as $key => $value){ if($key+1>=7&$key+1<=12){  ?>
<li class="list-group-item"><a href="qualification/<?php echo str_replace($tr,"",$value['qual']);$_SESSION["qual"][$i] = $value['qual'];$i++;?>" 
target="_blank">
  <?php echo $value["qual"];?></a></li><?php  }} ?>
  </div>
  
  <div class="col-sm-2 qual">
  <?php foreach ($qualtabs as $key => $value){ if($key+1>=13&$key+1<=18){  ?>
<li class="list-group-item"><a href="qualification/<?php echo str_replace($tr,"",$value['qual']);$_SESSION["qual"][$i] = $value['qual'];$i++; ?>" 
target="_blank">
  <?php echo $value["qual"];?></a></li><?php  }} ?>
  </div>
  <div class="col-sm-2 qual">
  <?php foreach ($qualtabs as $key => $value){ if($key+1>=19&$key+1<=24){  ?>
<li class="list-group-item"><a href="qualification/<?php echo str_replace($tr,"",$value['qual']);$_SESSION["qual"][$i] = $value['qual'];$i++;?>" 
target="_blank">
  <?php echo $value["qual"];?></a></li><?php  }} ?>
  </div>
  <div class="col-sm-2 qual">
  <?php foreach ($qualtabs as $key => $value){ if($key+1>=25&$key+1<=30){  ?>
<li class="list-group-item"><a href="qualification/<?php echo str_replace($tr,"",$value['qual']);$_SESSION["qual"][$i] = $value['qual'];$i++;?>" 
target="_blank">
  <?php echo $value["qual"];?></a></li><?php  }} ?>
  </div>
 
  </div>
</ul>
</div></div>
  <div class="tab-pane fade" id="Governmentjobs-desk" role="tabpanel" aria-labelledby="pills-contact-tab">
  <div class="row"><div class="col">
<ul class="list-group"><div class="row">
<div class="col-sm-2 qual"><?php $t=0;$_SESSION["toj"]=array();?><?php foreach ($tojtab as $key => $value){ if($key+1<=9){ ?>
<li class="list-group-item"><a href="type-of-job/<?php echo str_replace($tr,"",$value['tojname']);$_SESSION["toj"][$t] = $value['tojname'];$t++;?>" 
target="_blank">
  <?php echo $value["tojname"];?></a></li><?php }} ?>
</div>
<div class="col-sm-2 qual">
<?php foreach ($tojtab as $key => $value){ if($key+1>=10&$key+1<=18){ ?>
<li class="list-group-item"><a href="type-of-job/<?php echo str_replace($tr,"",$value['tojname']);$_SESSION["toj"][$t] = $value['tojname'];$t++;?>" 
target="_blank">
<?php echo $value["tojname"];?></a></li><?php }} ?>
  </div>
  <div class="col-sm-2 qual">
  <?php foreach ($tojtab as $key => $value){ if($key+1>=19&$key+1<=27){ ?>
<li class="list-group-item"><a href="type-of-job/<?php echo str_replace($tr,"",$value['tojname']);$_SESSION["toj"][$t] = $value['tojname'];$t++;?>" 
target="_blank">
<?php echo $value["tojname"];?></a></li><?php }} ?>
  </div>
  <div class="col-sm-2 qual">
<?php foreach ($tojtab as $key => $value){ if($key+1>=28&$key+1<=36){ ?>
<li class="list-group-item"><a href="type-of-job/<?php echo str_replace($tr,"",$value['tojname']);$_SESSION["toj"][$t] = $value['tojname'];$t++;?>" 
target="_blank">
<?php echo $value["tojname"];?></a></li><?php }} ?>
  </div>
  <div class="col-sm-2 qual">
  <?php foreach ($tojtab as $key => $value){ if($key+1>=37&$key+1<=49){ ?>
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

<div class="tab-pane fade" id="latest-govt-desk" role="tabpanel" aria-labelledby="pills-contact-tab">
  <div class="row"><div class="col">
    <ul class="list-group"><div class="row">
    <div class="col-sm-2 qual"><?php $l=0;$_SESSION["bname"]=array();?> <?php foreach ($latest_bnresult as $key => $value){ if($key+1<=7){ ?>
    <li class="list-group-item"><a href="latestjobs/<?php echo str_replace($tr,"",$value['bname']);$_SESSION["bname"][$l] = array('bname' => str_replace($tr,"",$value['bname']),'id' => $value['id']);$l++;?>" 
    target="_blank">
      <?php echo $value["bname"];?></a></li><?php }} ?>
    </div>
    <div class="col-sm-2 qual">
    <?php foreach ($latest_bnresult as $key => $value){ if($key+1>=8&$key+1<=16){ ?>
    <li class="list-group-item"><a href="latestjobs/<?php echo str_replace($tr,"",$value['bname']);$_SESSION["bname"][$l] = array('bname' => str_replace($tr,"",$value['bname']),'id' => $value['id']);$l++;?>" 
    target="_blank">
    <?php echo $value["bname"];?></a></li><?php }} ?>
      </div>
      <div class="col-sm-2 qual">
      <?php foreach ($latest_bnresult as $key => $value){ if($key+1>=17&$key+1<=24){ ?>
    <li class="list-group-item"><a href="latestjobs/<?php echo str_replace($tr,"",$value['bname']);$_SESSION["bname"][$l] = array('bname' => str_replace($tr,"",$value['bname']),'id' => $value['id']);$l++;?>" 
    target="_blank">
    <?php echo $value["bname"];?></a></li><?php }} ?>
      </div>
      <div class="col-sm-2 qual">
    <?php foreach ($latest_bnresult as $key => $value){ if($key+1>=25&$key+1<=32){ ?>
    <li class="list-group-item"><a href="latestjobs/<?php echo str_replace($tr,"",$value['bname']);$_SESSION["bname"][$l] = array('bname' => str_replace($tr,"",$value['bname']),'id' => $value['id']);$l++;?>" 
    target="_blank">
    <?php echo $value["bname"];?></a></li><?php }} ?>
      </div>
      <div class="col-sm-2 qual">
      <?php foreach ($latest_bnresult as $key => $value){ if($key+1>=33&$key+1<=40){ ?>
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