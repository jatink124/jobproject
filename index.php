<?php
// Start the session
session_start();
?>
<?php include 'insert-mysql-json.php' ?>
<?php include 'pages/getting_data_json.php' ?>
<?php include 'include/header.php' ?>
<?php include './queries/dropdown_state.php'?>
<?php include 'include/indexnavigation.php' ?>

<?php include 'indexdisplay.php' ?>
<?php include './queries/dropdown_qual.php'?>
<?php include './queries/dropdown_typeofjob.php'?>

<?php include './queries/dropdown_latest.php'?>
<?php include './queries/dropdown_latest_news.php'?>

<link href="css/scrollabletab.css" rel="stylesheet">
<!-- show data -->
<style>
/* trending categories */
@media (min-width: 991.98px){
  #searchtabmob{
    display:none;
  }

}
@media (max-width: 991.98px){
  #searchtabdesk{
    display:none;
  }
  div#pills-tabContent {
    width: 330px;
}
.table.latestnews{
  margin-left: -90px;
    width: 400px;
}
}
/* trending categories */
.card-title {
    margin-bottom:0rem!important;
    height: 60px!important;
    overflow-y: auto!important;
}
p.card-text {
    height: auto;
    overflow-y: hidden;
}
@media only screen and (min-width: 720px){
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
@media only screen and (max-width: 720px){
  input#newsearch {
    margin: 70px 10px;
    width: 270px;
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
select {
   
    width: 270px;
    border-bottom-left-radius: 6px;
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
    border-bottom-right-radius: 6px;
    height: 50px;
}
/* second nav tab */

</style>

<style>
::-webkit-scrollbar {
    width: 0px;  /* Remove scrollbar space */
    height:1px;
}
::-webkit-scrollbar-thumb {
    background: #FF0000;
}
/* tabs */
ul#pills-tab {
    overflow-x: auto;
    overflow-y: hidden;
    flex-wrap: nowrap;
    
  }
  .nav-pills .nav-link {
    
    font-family: proximanova, Verdana, sans-serif!important;
    font-weight: 600!important;
    size: 13px!important;
    line-height: 26px!important;
    
}
/* tabs */
/* searchindexcss */
@media (max-width: 720px){
  .col-sm-4.qual {
    width: 41%;
    overflow-wrap: break-word;
    margin-right: -30px;
}

  .navbar {
  z-index: 1!important;
}
  select {
   
margin-bottom:13px;
}
  
  form.searchform {
  margin-top: -20px;
    position: relative;
    bottom: 310px;
    color: white;
    padding-left: 25px;
    padding-right: 20px;
    padding-top: 25px;
    height: 301px;
    background-color: #fbfdff;
    border-radius: 50px;
    border: 5px solid rgba(0,0,0,0.1);
    box-shadow: 0 2px 12px rgba(0,0,0,0.09);
   }
   .container.searchtabs {
    margin-top: -300px;
}
.module {
    /* margin-bottom: 150px; */
  display:none;
}

span.spanheading {
    font-weight: 700;
}


* {
  box-sizing: border-box;
}

.outer{
  width:250px;
  height: 50px;
  background:#eb3b5a;
  text-align:center;
  margin:100px auto;
  position:relative;
  box-sizing:border-box;
  font-family: arial;
}
.outer:before{
  position:absolute;
  content:'';
  left:-25px;
  top:25px;
  border-top:25px solid transparent;
  border-right:25px solid #333;
  border-bottom:25px solid transparent;
  border-left:25px solid transparent;
  z-index:-1;
}
.outer:after{
  position:absolute;
  content:'';
  right:-25px;
  top:25px;
  border-top:25px solid transparent;
  border-right:25px solid transparent;
  border-bottom:25px solid transparent;
  border-left:25px solid #333;
  z-index:-1;
}
.left{
  position:absolute;
  border-top:25px solid #fc5c65;
  border-right:50px solid #fc5c65;
  border-bottom:25px solid #fc5c65;
  border-left:25px solid transparent;
  top:25px;
  left:-50px;
  z-index:-2;
}
.right{
  position:absolute;
  border-top:25px solid #fc5c65;
  border-right:25px solid transparent;
  border-bottom:25px solid #fc5c65;
  border-left:50px solid #fc5c65;
  top:25px;
  right:-50px;
  z-index:-2;
}

div span{
  display:block;
  line-height:50px;
  height:50px;
  font-weight:bold;
  font-size:28px;
  font-family:arial;
  color:#000;
  text-transform:uppercase;
}
.outertext {
    padding-top: 10px;
    font-size: medium;
    font-weight: 800;
    color: antiquewhite;
}
/* copied */
.container.sresult {
    margin-bottom: 50px;
    margin-top: 30px;
}
/* img.img-fluid.search {
    display: none;
} */
form.searchform {
    margin-bottom: 40px;
}
}
@media (min-width: 720px){
  .container.sresult {
    margin-bottom: 350px;
    /* margin-top: -330px; */
}

form.searchform {
  margin-top: -20px;
    position: relative;
    bottom: 150px;
    right: 0px;
    width:1100px;
  color: white;
    padding-left: 20px;
    padding-right: 20px;
    padding-top: 25px;
    height: 100px;
    background-color: #fbfdff;
    border-radius: 50px;
    border: 5px solid rgba(0,0,0,0.1);
    box-shadow: 0 2px 12px rgba(0,0,0,0.09);
   }
   .container.searchtabs {
    margin-top: -100px;
}
.module {
    /* margin-bottom: 150px; */
    margin-top: -220px;
}
.module > header {
  position: absolute;
  
  left: 0;
  width: 100%;
  padding: 20px 10px;
  background: inherit;
  background-attachment: fixed;
  overflow: hidden;
}
.module > header::before {
  content: "";
  position: absolute;
  top: -20px;
  left: 0;
  width: 200%;
  height: 200%;
  background: inherit;
  background-attachment: fixed;
  -webkit-filter: blur(4px);
  filter: blur(4px);
}
span.spanheading {
    font-weight: 700;
}
.module > header::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 50%;
  height: 100%;
  background: rgba(0, 0, 0, 0.25)
}
.module > header > h1 {
  margin: 0;
  color: white;
  position: relative;
  z-index: 1;
}

* {
  box-sizing: border-box;
}

.outer{
  width:500px;
  height: 50px;
  background:#eb3b5a;
  text-align:center;
  margin:100px auto;
  position:relative;
  box-sizing:border-box;
  font-family: arial;
}
.outer:before{
  position:absolute;
  content:'';
  left:-25px;
  top:25px;
  border-top:25px solid transparent;
  border-right:25px solid #333;
  border-bottom:25px solid transparent;
  border-left:25px solid transparent;
  z-index:-1;
}
.outer:after{
  position:absolute;
  content:'';
  right:-25px;
  top:25px;
  border-top:25px solid transparent;
  border-right:25px solid transparent;
  border-bottom:25px solid transparent;
  border-left:25px solid #333;
  z-index:-1;
}
.left{
  position:absolute;
  border-top:25px solid #fc5c65;
  border-right:50px solid #fc5c65;
  border-bottom:25px solid #fc5c65;
  border-left:25px solid transparent;
  top:25px;
  left:-50px;
  z-index:-2;
}
.right{
  position:absolute;
  border-top:25px solid #fc5c65;
  border-right:25px solid transparent;
  border-bottom:25px solid #fc5c65;
  border-left:50px solid #fc5c65;
  top:25px;
  right:-50px;
  z-index:-2;
}

div span{
  display:block;
  line-height:50px;
  height:50px;
  font-weight:bold;
  font-size:28px;
  font-family:arial;
  color:#000;
  text-transform:uppercase;
}
.outertext {
    padding-top: 10px;
    font-size: larger;
    font-weight: 800;
    color: antiquewhite;
}
}
/* searchindexcss */
 </style>
<!-- <div class="container-fluid" style="margin-bottom:25px;">
  <div class="row">
  <div class="col-sm-12 col-md-12 col-lg-12">
  <nav class="white">
      <div class="nav-wrapper">
        <form autocomplete="off" id="form">
          <div class="input-field">
            <input class="srch" id="newsearch" type="search" data-html="true" placeholder="Search your job" data-toggle="popover" title="Find Job" data-content="Enter your 
            Search Term like <b>Latest jobs</b>,<b>jobs after b.tech</b>,<b>jobs after 10th</b>" required>
            <div class="card-panel" id="outputt" style="display:none">
         </div>        
            <i class="material-icons" id="close"></i>
            <div class="card-panel" id="navoutput" style="display:none">
         </div>        
            <i class="material-icons" id="close"></i>
          </div>
        </form>
       
      </div>
    </nav>
  </div>
  </div>
  </div>  -->
  <?php include './search/search_output.php';?>
<div class="container-fluid search-sarkari-img" >
<div class="img-srch">
<img src="images/search_sarkari_job.jpg" class="img-fluid search" alt="Responsive image" style="width:1300px;height:400px;"></div>

 <form class="searchform" action="searchresult" method="post">
 <!-- style="display:none" -->
<div class="row">
<div class="col-xs col-sm col-md col-lg"><select id="qual" name="qual"> 
  <option value="-1" selected>Select your Qualification</option>
<?php while($qualrow = mysqli_fetch_array($qualresult)){?><option value="<?php echo $qualrow["id"];?>"><?php echo $qualrow["qual"];?></option><?php }?>
</select></div>
<div class="col-xs col-sm col-md col-lg"><select id="toj" name="toj"> <option value="-1" selected>Select Type of Job</option>
<?php while($tojrow = mysqli_fetch_array($tojresult)){?><option value="<?php echo $tojrow["id"];?>"><?php echo $tojrow["tojname"];?></option><?php }?>
</select></div>
<div class="col-xs col-sm col-md col-lg"><select id="state" name="state"> <option value="-1" selected >Select State</option>
<?php while($staterow = mysqli_fetch_array($stateresult)){?><option value="<?php echo $staterow["id"];?>"><?php echo $staterow["statename"];?></option><?php }?>
</select></div>
<div class="col-xs col-sm col-md col-lg"><input class="btn btn-primary btn-lg" type="submit" value="Search"></div>
</div>
<div class="module">
<header>
<h1 class="searchheading">Find Sarkari Job</h1>
<h5 class="searchheading">Select your preferred option to find suitable job for You.</h5></header></div>
</form>
</div>

<!-- trending_categories -->
<?php include 'pages/trending_categories.php' ?>
<!-- trending_categories -->
<!-- trending_categories -->
<?php include 'pages/trending_categories_desk.php' ?>
<!-- trending_categories -->

<!-- latest news -->
<?php include 'pages/latestnews_index.php' ?>

<?php include 'pages/footer.php' ?>

<!-- latest news -->

<?php include 'include/footer.php' ?>



   