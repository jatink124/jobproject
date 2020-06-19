<?php
require_once('../database.php');
// $sid = $_COOKIE["stateid"];
$anydata=true;
$gid = 28;
$full=array();
$resindex = $database->read_finance($gid);
if (mysqli_num_rows($resindex)==0) {
    $message='';
    $message .= "There are no records please select other trending jobs";
}
if(isset($message))
{    $anydata=false;
    include 'governmentalldisplay.php';
   
    
    // echo("<script>location.href = 'index';</script>"); 
 }
else{
 $boardname = [];
$postname = [];
$mainintro = [];
$MainLink = [];
$pdflink = [];
$imagelink = [];
$id = [];
$departtname = [];
$numberofposts= [];
$boardid = [];
$salary = [];
$deptqualification = [];
$jobrole = [];
$agelimit = [];
$ldtapply = [];
$brddeptid = [];
$deptpostname = [];
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
    $boardid[] = $row['boardid'];
    $postname[] =  $row['post_name'];
    $mainintro[] = $row['main_intro'];   
    $MainLink[] = $row['MainLink'];
    $pdflink[] = $row['pdflink'];
    $imagelink[] = $row['imagelink'];
    $tags[] = $row['tags'];
    $ldtapply[] = $row['joblastdate'];
    $brddeptid[] = $row['bdid'];
    $deptpostname[] = $row['deptpostname'];
    $count++;
}
}
?>