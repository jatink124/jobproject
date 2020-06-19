<?php
require_once('../database.php');
// $tags = $_GET['s'];
// $tagid = intval($tags);
$tr=array("-","_","/"," ",",","&","(",")","."); 
session_start();
$full=array();
if(!empty($_GET["s"])){
    $queryid = $_GET["s"];
    //  $newqualname =  $_GET['qual'];
    
      foreach($_SESSION["boarddeptsearch"] as $result => $key) {
            if(str_replace($tr,"",$key['post_name'])==$queryid){
             $bdprevid = $key['id'];
             $previd=0;
           }}
    }
    else if(!empty($_GET["d"])){
        $queryid = $_GET["d"];
        //  $newqualname =  $_GET['qual'];
        // $_SESSION['deptsearch'] = explode(',',$_COOKIE["deptsearchid"]);
          foreach($_SESSION["searchdett"] as $result => $key) {
                if(str_replace($tr,"",$key['deptpostname'])==$queryid){
                 $bdprevid = $key['id'];
                 $previd=0;
               }}
        }
        else if(!empty($_GET["q"])){
            $queryid = $_GET["q"];
            //  $newqualname =  $_GET['qual'];
           
              foreach($_SESSION["jobnewdet"] as $result => $key) {
                    if(str_replace($tr,"",$key['postname'])==$queryid){
                     $bdprevid = $key['id'];
                     $previd=0;
                   }}
            }
$resindex = $database->read_tagsdet($bdprevid);
$id = [];
$deptname = [];
$deptpostname = [];
$numberofposts = [];
$salary = [];
$qualification = [];
$agelimit = [];
$MainLink = [];
$pdflink = [];
$imagelink = [];
$main_intro = [];
$tags = [];
$Eligibility = [];
$Total_Vacancy = [];
$Experience = [];
$gradepay = [];
$postname = [];
$count = 0;
    while ($row = $resindex->fetch_assoc()) {
        // $tmming=$row['timming'];
        // echo $row['timming'];
        // $data['result'] = $row;
        // $jsonfile = json_encode( $data['result']);
        //   foreach ($jsonfile) {
        //     echo $val;
        // } }
        
        $id[] = $row['id'];
        $deptname[] = '';
        $deptpostname[] = $row['deptpostname'];
        $numberofposts[] = '';   
        $salary[] = '';
        $qualification[] = '';
        $agelimit[] = '';
        $MainLink[] = $row['MainLink'];
        $pdflink[] = $row['pdflink'];
        $imagelink[] = $row['imagelink'];
        $main_intro[] = $row['main_intro'];
        $tags[] = $row['tags'];
        $Eligibility[] = $row['Eligibility'];
        $Total_Vacancy[] = $row['posts'];
        $Experience[] = "";
        $howtoapply = "";
        $gradepay[] = $row['salary'];
        $Duties = '';
        $count++;
    }




?>