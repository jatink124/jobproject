<?php
require_once('../database.php');
$full=array();
$qual = isset($_POST['qual']) ? $_POST['qual'] : false;
$resindex = $database->read_index();
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
$bname = [];
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
    $bname[] = $row['bname'];
    $count++;
}

?>