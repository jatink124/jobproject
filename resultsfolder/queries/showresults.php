<?php include '../include/connectionstring.php'?>
<?php
//fetch.php
$sql = "select tbr.id,tbr.postname,tbr.resboardname,tbr.pdfpath,
tbr.sourceurl,tbr.publisheddate,trc.category from tbl_results tbr inner join tbl_results_category trc
on tbr.category=trc.id order by tbr.id DESC";
$resultdata = mysqli_query($connect, $sql);
while($roww = mysqli_fetch_array($resultdata)){
   $id[] = $roww["id"];
    $pdfp[]=$roww["pdfpath"];
    $pdfsrc[]=$roww["sourceurl"];
    $postname[]=$roww["postname"];
}  
?>