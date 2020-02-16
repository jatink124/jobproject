<?php
require_once('database.php');
$full=array();
$res = $database->read();
$boardname = [];
$postname = [];
$mainintro = [];
$MainLink = [];
$pdflink = [];
$imagelink = [];
$id = [];
$departtname = [];
$numberofposts= [];
$detboardid = [];
$detsalary = [];
$deptqualification = [];
$detjobrole = [];
$detagelimit = [];
$mainintro = [];
$tags = [];
$deptboardid = [];
$postname = [];
$mainqual = [];
$al = [];
$Experience = [];
$dsp = [];
$agelimit = [];
$howtoapply = [];
$gradepay = [];
$Duties = []; 
$count = 0;
while ($row = $res->fetch_assoc()) {
    // $tmming=$row['timming'];
    // echo $row['timming'];
    // $data['result'] = $row;
    // $jsonfile = json_encode( $data['result']);
    //   foreach ($jsonfile) {
    //     echo $val;
    // } }
    $idc[] = $i;
   $id[] = $row['id'];
    $boardname[] = $row['bname'];
     $Eligibility[] = $row['Eligibility'];
    $departname[] = $row['deptname'];
    $detboardid[] = $row['jbd'];
    $posts[] = $row['posts'];
    $detsalary[] = $row['salary'];
    $qualification[] = $row['qualification'];
    $detjobrole[] = $row['jobrole'];
    $detagelimit[] = $row['agelimit'];
    $imagelink[] = $row['imagelink'];
    $mainintro[] = $row['main_intro']; 
    $MainLink[] = $row['MainLink'];
    $pdflink[] = $row['pdflink'];
    $postname[] = $row['deptpostname'];
    $tags[] = $row['tags'];
    $deptboardid[] = $row['gh'];
    $mainqual[] = $row['mainqual'];
    $al[] = $row['al'];
    $Experience[] = $row['Experience'];
    $dsp[] = $row['desiredspecialization'];
    $agelimit[] = $row['agelimit'];
    $howtoapply[] = $row['Howtoapply'];
    $gradepay[] = $row['Grade_Pay'];
    $Duties[] = $row['Duties'];
    $count++;
}
$ress = $database->read();
$posty = mysqli_fetch_assoc($ress);
$fields = array();

foreach($posty as $title => $value){
    $fields[] = $title;
}  
?>