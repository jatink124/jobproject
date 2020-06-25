
<?php
unset($_SESSION['jobnewdett']);
require_once('database.php');
$full=array();
if(!empty($_GET["jd"])){
$queryid = $_GET["jd"];
//  $newqualname =  $_GET['qual'];

  foreach($_SESSION["newsearch"] as $result => $key) {
     if(str_replace($tr,"",$key['post_name'])==$queryid){
      $previdd = $key['id'];
      $previd=0;
    }}
    foreach($_SESSION["boarddeptsearch"] as $result => $key) {
        if(str_replace($tr,"",$key['post_name'])==$queryid){
         $bdprevid = $key['id'];
         $previd=0;
       }}
}
if(!empty($_GET["s"])){
    $queryid = $_GET["s"];
    //  $newqualname =  $_GET['qual'];
    
      foreach($_SESSION["boarddeptsearch"] as $result => $key) {
            if(str_replace($tr,"",$key['post_name'])==$queryid){
             $bdprevid = $key['id'];
             $previd=0;
           }}
    }  
    // else if(!empty($_GET["l"])){
        // $_SESSION['jobnewdet'] = explode(',',$_COOKIE["height"]);n
        // $_SESSION['deptsearch'] = explode(',',$_COOKIE["deptsearchid"]);n
        // $_SESSION['searchid'] = explode(',',$_COOKIE["search_id"]);
    //   $result = array_merge($_SESSION['jobnewdet'],$_SESSION['searchid']);
    //     $queryid = $_GET["l"];n
        //  $newqualname =  $_GET['qual'];
        
        //   foreach($_SESSION['jobnewdet'] as $result => $key) {
        //         if(str_replace($tr,"",$key)==$queryid){
        //          $searchbdprevid = $_SESSION['searchid'][$result];
        //          $previd=0;
        //        }}
        // }
        else if(!empty($_GET["l"])){
            $queryid = $_GET["l"];
            if(isset($_SESSION['jobnewdett'])){
                foreach($_SESSION["jobnewdett"] as $result => $key) {
                    if(str_replace($tr,"",$key['postname'])==$queryid){
                     $searchbdprevid = $key['id'];
                     $previd=0;
                   }}
            }
            else{
            $str = file_get_contents('tblpost.json');
            $json = json_decode($str, true);
            foreach($json as $result => $key) {
                if(str_replace($tr,"",$key['postname'])==$queryid){
                 $searchbdprevid = $key['id'];
                 $previd=0;
               }}
            //  $newqualname =  $_GET['qual'];
            
            }
            }
if(isset($_GET['s'])){
    $res = $database->read_tagsdet($bdprevid);
}
else if(isset($_GET['q'])){
    $res = $database->read_tagsindexdet($_GET['q']);
}
else if(isset($_GET['jd'])){
    // $res = $database->read();
    $res = $database->read_tagsindexdet($previdd);
}
else if(isset($_GET['l'])){
    $res = $database->read_tagsindexdet($searchbdprevid);
}
else{
$res = $database->read();
}
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
$mainpost = [];
$mainqual = [];
$al = [];
$Experience = [];
$dsp = [];
$agelimit = [];
$howtoapply = [];
$gradepay = [];
$Duties = [];
$Total_Vacancy = []; 
$count = 0;
while ($row = $res->fetch_assoc()) {
    // $tmming=$row['timming'];
    // echo $row['timming'];
    // $data['result'] = $row;
    // $jsonfile = json_encode( $data['result']);
    //   foreach ($jsonfile) {
    //     echo $val;
    // } }
    // $idc[] = $i;
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
    $Total_Vacancy[] = $row['Total_Vacancy'];
    $mainpost[] = $row['post_name']; 
    $count++;
}
$ress = $database->read();
$posty = mysqli_fetch_assoc($ress);
$fields = array();

foreach($posty as $title => $value){
    $fields[] = $title;
}  
?>