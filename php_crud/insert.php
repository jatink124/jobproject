<?php
 require_once('../database.php');
 $nameErr = $numErr = $addErr = $websiteErr = "";
 $res="" ;

// $eligibility = implode(',', $_POST['eligibility']);
 
//  if(isset($_POST) & !empty($_POST)){
//   if (empty($_POST["CompanyName"])) {
//     $Companynameerr = "CompanyName is required";
//   } else {
//     $Companyname = $database->sanitize($_POST['CompanyName']);     //1-Name Data
//   }
//   if (empty($_POST["JobTitle"])) {
//     $JobTitleErr = "Job Title is required";
//   } else {
//     $JobTitle = $database->sanitize($_POST['JobTitle']);   //2-Number Data
//   }
//   // if (empty($_POST["address"])) {
//   //   $addErr = "Address is required";
//   // } 
//   if (empty($_POST["eligibility"])) {
//     $eligibilityErr = "Eligibiity is required";
//   } 
//   else {
//     $eligibility = $database->sanitize($eligibility);     //3-emaildata
//   }
  $CompanyName =  $_POST['CompanyName'];
  $postname =  $_POST['post_name'];                       //4-dental-problem-data
  $Eligibility = $_POST['Eligibility'];
  $JobLocation = $_POST['JobLocation'];
  $jobdateadded = $_POST['jobdateadded'];
  $joblastdate = $_POST['joblastdate'];
  $tags = $_POST['tags']; 
  $typeofjob =  $_POST['typeofjob'];
  $MainLink = $_POST['MainLink'];   
  $pdflink =  $_POST['pdflink'];
  $lastdateoffee =  $_POST['lastdateoffee'];                       //4-dental-problem-data
  $status = $_POST['status'];
  $imagelink = $_POST['imagelink'];
  $State = $_POST['State'];
  $main_intro = $_POST['main_intro'];
  $post_name = $_POST['post_name']; 
  $Total_Vacancy =  $_POST['Total_Vacancy'];
  $pay = $_POST["pay"];
  $Grade_Pay =  $_POST['Grade_Pay'];                       //4-dental-problem-data
  $Age_Limit = $_POST['Age_Limit'];
  $Qualification = $_POST['Qualification'];
  $Experience = $_POST['Experience'];
  $duties = $_POST['duties'];
  $Howtoapply = $_POST['Howtoapply'];    
                          //5-gender-data (boolean)
  
// if( $Companyname!="" | $JobTitle!="" | $eligibility !="" | $Keywords !=""){
  $res = $database->create_jobdetail($CompanyName,$postname,$Eligibility,$JobLocation,$jobdateadded,
  $joblastdate,$tags,$typeofjob,$MainLink,$pdflink,$lastdateoffee,$status,$imagelink,$State,$main_intro,$post_name,
  $Total_Vacancy,$pay,$Grade_Pay,$Age_Limit,$Qualification,$Experience,$duties,$Howtoapply);
	 if($res){
    echo '<div class="alert alert-success alert-dismissable" id="flash-msg">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    <h4><i class="icon fa fa-check"></i>We will keep in touch</h4>
    </div>';
     
	 }else{
    echo '<div class="alert alert-success alert-dismissable" id="flash-msg">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    <h4><i class="icon fa fa-check"></i>Please fill in details.</h4>
    </div>'; }
    header("Location: ../index.php");
?>
