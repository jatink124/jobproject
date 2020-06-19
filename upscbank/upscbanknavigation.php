<?php 	$stateid = "intialvalue";
	$cookie_value = "";
	setcookie($stateid, $cookie_value, time() + (86400 * 30), "/");?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary" >
  <a class="navbar-brand " href="index">catchmyjob</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Find job by state
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item yu" id="4" href="./jobsinbihar" target="_blank">Bihar</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item yu" id="9" href="./jobsinhimachal" target="_blank">Himachal</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item yu" id="34" href="./jobsindelhi" target="_blank">Delhi</a><div class="dropdown-divider"></div>
          
          <a class="dropdown-item yu" id="27" href="./jobsinuttarpradesh" target="_blank">Uttar Pradesh</a><div class="dropdown-divider"></div>
          
          <a class="dropdown-item yu" id="23" href="./jobsintamilnadu" target="_blank">TamilNadu</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item yu" id="7" href="./jobsingujarat" target="_blank">Gujarat</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item yu" id="13" href="./jobsinmadhyapradesh" target="_blank">Madhya Pradesh</a>
         
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Recognized Jobs
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item brdjob" id="1" href="upsc-jobs" target="_blank">UPSC jobs</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item brdjob" id="2" href="bank-jobs" target="_blank">Bank jobs</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item brdjob" id="71" href="./ISRO_Sarkari_job" target="_blank">ISRO Jobs</a><div class="dropdown-divider"></div>
          
    <a class="dropdown-item brdjob" id="73" href="./service_selection_commission" target="_blank">Staff Selection Commission </a><div class="dropdown-divider"></div>
          
</div>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Find Results
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
     <?php $count=0;   while($roww = mysqli_fetch_array($resultdata)){?>
 <a class="dropdown-item resm" id="<?php echo $count?>" href="./jobresult"><?php echo $roww["resboardname"]?></a><?php
 $count++; } ?>
 <a class="dropdown-item vmore" id="" href="sarkarijobresult"><b>View More</b></a>
     </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        job-by-Qualification
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item eligjob" id ="1" href="./10th_pass_jobs">10th Jobs</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item eligjob" id="3" href="./graduation_pass_jobs">Graduation Jobs</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item eligjob" id="2" href="./twelth_pass_jobs">Intermediate(12th) jobs</a><div class="dropdown-divider"></div>
          <a class="dropdown-item eligjob" id="14" href="./iti_pass_jobs">ITI jobs</a>
          </div>
      </li>
     
     
      <!-- <li class="nav-item">
        <a class="nav-link" href="check_job_data.php">Check Job Detail</a>
      </li> -->
     
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>