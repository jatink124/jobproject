<?php
require_once('../database.php');
$delhijobsid = $_COOKIE["id"];
$full=array();
if(isset($_GET['a'])){
    $resindex = $database->read_delhidetid($delhijobsid);
}
else{
$resindex = $database->read_delhidet($delhijobsid);
}
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
if(isset($_GET['a'])){
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
        $deptpostname[] = '';
        $numberofposts[] = '';   
        $salary[] = '';
        $qualification[] = '';
        $agelimit[] = $row['Age_Limit'];
        $MainLink[] = $row['MainLink'];
        $pdflink[] = $row['pdflink'];
        $imagelink[] = $row['imagelink'];
        $main_intro[] = $row['main_intro'];
        $tags[] = $row['tags'];
        $Eligibility[] = $row['Eligibility'];
        $Total_Vacancy[] = $row['posts'];
        $Experience[] = $row['Experience'];
        $howtoapply = "";
        $gradepay[] = $row['Grade_Pay'];
        $postname[] = $row['post_name'];
        $Duties = '';
        $count++;
    }
}
else{
while ($row = $resindex->fetch_assoc()) {
    // $tmming=$row['timming'];
    // echo $row['timming'];
    // $data['result'] = $row;
    // $jsonfile = json_encode( $data['result']);
    //   foreach ($jsonfile) {
    //     echo $val;
    // } }
    
    $id[] = $row['id'];
    $deptname[] = $row['deptname'];
    $deptpostname[] =  $row['deptpostname'];
    $Total_Vacancy[] = $row['posts'];   
    $gradepay[] = $row['salary'];
    $qualification[] = $row['qualification'];
    $agelimit[] = $row['agelimit'];
    $MainLink[] = $row['MainLink'];
    $pdflink[] = $row['pdflink'];
    $imagelink[] = $row['imagelink'];
    $main_intro[] = $row['main_intro'];
    $tags = $row['tags'];
    $Eligibility[] = $row['qual'];
    $Experience[] = $row['desiredspecialization'];
    $postname[] = $row['post_name'];
    $howtoapply = "";
    $Duties = "";
    $count++;
}
}
session_unset();
?>