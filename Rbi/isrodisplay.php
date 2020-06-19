<?php
require_once('../database.php');
$isroid = 4;
$full=array();
$resindex = $database->read_isro($isroid);

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
$depteligibility = [];
$ldtapply = [];
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
    $postname[] =  $row['deptpostname'];
    $mainintro[] = $row['main_intro'];   
    $MainLink[] = $row['MainLink'];
    $pdflink[] = $row['pdflink'];
    $imagelink[] = $row['imagelink'];
    $tags[] = $row['tags'];
    $ldtapply[] = $row['joblastdate'];
    $deptqualification[] = $row['qualification'];
    $depteligibility[] = $row['Eligibility'];
    $numberofposts[] = $row['posts'];
    $count++;
}
  
?>