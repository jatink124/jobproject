
<nav class="navbar navbar-expand-lg navbar-dark bg-primary" >
  <a class="navbar-brand " href="./index">catchmyjob</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./index">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Find job by state
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item yu" id="4" href="./jobsinbihar">Bihar</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item yu" id="9" href="./jobsinhimachal">Himachal</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item yu" id="34" href="./jobsindelhi">Delhi</a><div class="dropdown-divider"></div>
          
          <a class="dropdown-item yu" id="27" href="./jobsinuttarpradesh">Uttar Pradesh</a><div class="dropdown-divider"></div>
          
          <a class="dropdown-item yu" id="23" href="./jobsintamilnadu">TamilNadu</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item yu" id="7" href="./jobsingujarat">Gujarat</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item yu" id="13" href="./jobsinmadhyapradesh">Madhya Pradesh</a>
         
        </div>
      </li>
       <li class="nav-item">
        <a class="nav-link brdjob" id="1" href="./upsc-jobs">UPSC jobs</a>
      </li>
       <li class="nav-item">
        <a class="nav-link brdjob" id="2" href="./bank-jobs">Bank Jobs</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Find Results
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
     <?php $count=0;   while($roww = mysqli_fetch_array($resultdata)){?>
 <a target="_blank" class="dropdown-item resm" id="<?php echo $count?>" href="./jobresult"><?php echo $roww["resboardname"]?></a><?php
 $count++; } ?>
    <a class="dropdown-item vmore" id="" href="sarkarijobresult"><b>View More</b></a>
     </div>
      </li>
      <li class="nav-item">
        <a class="nav-link eligjob" id ="1" href="./10th_pass_jobs">10th Jobs</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link eligjob" id="3" href="./graduation_pass_jobs">Graduation Jobs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link isrojob" id="71" href="./ISRO_Sarkari_job">ISRO jobs</a>
      </li>
     
      <!-- <li class="nav-item">
        <a class="nav-link" href="Detail_job.php">Job Detail</a>
      </li> -->
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