<?php
require_once('../database.php');
$full=array();
$anydata=true;
$latest=-1;
$tr=array("-","_","/"," ",",","&","(",")","'",".");
if(!empty($_GET['qual'])){
    // $newqualname = $_SERVER['QUERY_STRING'];}
    
    $newqualname =  $_GET['qual'];

    foreach($_SESSION["qual"] as $result => $key) {
       if(str_replace($tr,"",$key)==$newqualname){
        $_GET['qual'] = $result+1;
    }}
    // unset($_SESSION['qual']);
}
if(!empty($_GET['loc'])){
    $newlocname =  $_GET['loc'];

foreach($_SESSION["state"] as $result => $key) {
       if(str_replace('-',"",$key)==$newlocname){
        $_GET['loc'] = $result+1;
    }}
   $name=$newlocname;
    // unset($_SESSION['state']);
}
if(!empty($_GET['toj'])){
    $newtojname =  $_GET['toj'];

foreach($_SESSION["toj"] as $result => $key) {
       if(str_replace($tr,"",$key)==$newtojname){
        $_GET['toj'] = $result+1;
    }}
//    $name=$newlocname;
    // unset($_SESSION['state']);
}
if(!empty($_GET['latest'])){
    $newlatestname =  $_GET['latest'];

foreach($_SESSION["bname"] as $result => $key) {
       if(str_replace($tr,"",$key['bname'])==$newlatestname){
        $_GET['latest'] = $key['id'];
    }}
//    $name=$newlocname;
    // unset($_SESSION['state']);
}
if(!empty($_GET['name'])){
$name = $_GET['name'];}

if ( !empty($_GET['latest']) ){
    $latest = $_GET['latest']!="" ? $_GET['latest'] : -1;
    $toj=-1;$state=-1;$qual=-1;}
if ( !empty($_GET['qual']) ){
$qual = $_GET['qual']!="" ? $_GET['qual'] : -1;
$toj=-1;$state=-1;$latest=-1;}
if (!empty($_GET['toj'])){
$toj = $_GET['toj']!="" ? $_GET['toj'] : -1;$qual=-1;$state=-1;$latest=-1;}
if ( !empty($_GET['loc']) ){
$state = $_GET['loc']!="" ? $_GET['loc'] : -1;$qual=-1;$toj=-1;$latest=-1;}

if ( !empty($_POST) ){

if($_POST['qual']=="-1" & $_POST['toj']=="-1" & $_POST['state']=="-1"){
    $message='';
    $message .= " Please Select The atleast one searchable option";
}
if(isset($message))
{
    echo "<script>alert('$message');</script>"; 
    echo("<script>location.href = 'index';</script>"); 
}
    $qual = $_POST['qual']!="" ? $_POST['qual'] : -1;
$toj = $_POST['toj']!="" ? $_POST['toj'] : -1;
$state = $_POST['state']!="" ? $_POST['state'] : -1;}
if($qual!=-1 && $toj!=-1){
    $resindex = $database->search_index_multiple($qual,$toj,$state);
}
else if($qual!=-1 && $state!=-1){
    $resindex = $database->search_index_multiple($qual,$toj,$state);
}
else if($state!=-1 && $toj!=-1){
    $resindex = $database->search_index_multiple($qual,$toj,$state);
}
else if($qual!=-1 && $state!=-1 && $toj!=-1){
    $resindex = $database->search_index_multiple($qual,$toj,$state);
}
else{
$resindex = $database->search_index($qual,$toj,$state,$latest);
}
if (mysqli_num_rows($resindex)==0) {
    $message='';
    $message .= "There are no records please select other trending jobs";
}
if(isset($message))
{    $anydata=false;
    include 'biharalldisplay.php';
   
    
    // echo("<script>location.href = 'index';</script>"); 
 }
else{
$bdid = [];
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
$deptpostname = [];
$jobrole = [];
$agelimit = [];
$ldtapply = [];
$bname = [];
$statename=[];
$qualname=[];
$tojname=[];
$count=0;
$countt = 0;
while ($row = $resindex->fetch_assoc()) {
    // $tmming=$row['timming'];
    // echo $row['timming'];
    // $data['result'] = $row;
    // $jsonfile = json_encode( $data['result']);
    //   foreach ($jsonfile) {
    //     echo $val;
    // } }
    
    $id[] = $row['id'];
    $bdid[] = $row['bdid'];
    $boardid[] = $row['boardid'];
    $postname[] =  $row['post_name'];
    $mainintro[] = $row['main_intro'];   
    $MainLink[] = $row['MainLink'];
    $pdflink[] = $row['pdflink'];
    $imagelink[] = $row['imagelink'];
    $tags[] = $row['tags'];
    $ldtapply[] = $row['joblastdate'];
    $bname[] = $row['bname'];
    $deptpostname[] = $row['deptpostname'];
    $statename[] = $row['statename'];
    $qualname[]=$row['qual'];
    $tojname[]=$row['tojname'];
   $count++;
    $countt++;
}
}

?>