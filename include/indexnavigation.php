
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

</style>
<style>
/* links */
@media (min-width: 720px){
  #internallink
   {
    border: 0px;
    font-size: x-large !important;
    font-weight: 700!important;
    width: 600px!important;
    /* align-content: center; */
    text-align-last: center!important;
    align-self: center!important;
    
}
a:link {
  text-decoration: none;
}
.container.internal-links {
    margin: 60px 0px 60px 0px;
}
}
/* links */
 @media only screen and (max-width: 600px){
  .navsearch {
    display: none;
}
.alert-warning {
    color: #856404;
    background-color: #fff3cd;
    border-color: #ffeeba;
  
 
}
 }
 @media only screen and (min-width: 600px){
 a#navbarDropdown {
    font-size: 16px!important;
    margin-left: -10px!important;
}
.alert-warning {
    color: #856404;
    background-color: #fff3cd;
    border-color: #ffeeba;
    padding-left: 220px;
    font-size: x-large;
}
}

@media only screen and (min-width: 600px){
  .srch {
    display: none;
}
input#navsearch {
    /* margin: 70px 300px; */
    width: 350px;
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
    margin: 70px 10px;
    width: 350px;
    color: #c59f09;
    height: 40px;
}
div#output {
    margin: -50px -50px 130px;
}
.container-fluid.fg {
    background-color: darkorchid;
}
}
  </style>

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
      <li class="nav-item ">
      <input class="navsearch" id="navsearch" type="search" data-html="true" placeholder="Search your job" data-toggle="popover" title="Find Job" data-content="Enter your 
          Search Term like <b>Latest jobs</b>,<b>jobs after b.tech</b>,<b>jobs after 10th</b>">
         
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Find job by state
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      
          <a class="dropdown-item yu" id="9" href="jobsinNoida" target="_blank">Noida</a>
          <div class="dropdown-divider"></div>
           <a class="dropdown-item yu" id="34" href="jobsinMumbai" target="_blank">Mumbai</a><div class="dropdown-divider"></div>
          
           <a class="dropdown-item yu" id="27" href="jobsinMaharashtra" target="_blank">Maharashtra</a><div class="dropdown-divider"></div>
          
           <a class="dropdown-item yu" id="23" href="jobsinKarnataka" target="_blank">Karnataka</a>
           <div class="dropdown-divider"></div>
           <a class="dropdown-item yu" id="7" href="jobsinUttrakhand" target="_blank">Uttrakhand</a>
           <div class="dropdown-divider"></div>
           <a class="dropdown-item yu" id="13" href="jobsinMadhyaPradesh" target="_blank">Madhya Pradesh</a>
        </div>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Government Jobs
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <!-- <a class="dropdown-item brdjob" id="1" href="upsc-jobs" target="_blank">UPSC jobs</a> -->
          <div class="dropdown-divider"></div>
          <a class="dropdown-item brdjob" id="2" href="bank-jobs" target="_blank">Bank jobs</a>
          <div class="dropdown-divider"></div>
          <!-- <a class="dropdown-item brdjob" id="4" href="./ISRO_Sarkari_job" target="_blank">ISRO Jobs</a> -->
          <!-- <div class="dropdown-divider"></div>
  <a class="dropdown-item brdjob" id="5" href="./staff_selection_commission" target="_blank">Staff Selection Commission </a> -->
  <div class="dropdown-divider"></div>
  <a class="dropdown-item brdjob" id="6" href="./reservebankofindia" target="_blank">RBI</a><div class="dropdown-divider"></div>
  <a class="dropdown-item brdjob" id="6" href="Engineering-Jobs" target="_blank">Engineering Jobs</a><div class="dropdown-divider"></div>           
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
        <a class="dropdown-item eligjob" id ="1" target="_blank" href="./10th-pass-jobs">10th Jobs</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item eligjob" id="3" target="_blank" href="./graduation-pass-jobs">Graduation Jobs</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item eligjob" id="2" target="_blank" href="./twelth-pass-jobs">Intermediate(12th) jobs</a><div class="dropdown-divider"></div>
          <a class="dropdown-item eligjob" id="14" target="_blank" href="./iti-pass-jobs">ITI jobs</a>
          </div>
      </li>
     
     
     
     
    </ul>
   
    
  </div>
</nav>