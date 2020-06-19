<?php include '../../include/connectionstring.php'?>
<?php
//fetch.php

//$connect = mysqli_connect("localhost", "root", "", "findsarkarijob");
$postname = mysqli_real_escape_string($connect, $_POST["postname"]);
$resboardname = mysqli_real_escape_string($connect, $_POST["resboardname"]);
$pdfpath = mysqli_real_escape_string($connect, $_POST["pdfpath"]);
$sourceurl = mysqli_real_escape_string($connect, $_POST["sourceurl"]);
$resultcategory = mysqli_real_escape_string($connect, $_POST["resultcategory"]);
$publisheddate = mysqli_real_escape_string($connect, $_POST["publisheddate"]);
 $sql = "INSERT INTO tbl_results (postname,resboardname,pdfpath,sourceurl,category,publisheddate) 
 VALUES ('$postname','$resboardname','$pdfpath','$sourceurl','$resultcategory','$publisheddate')";
$resultt = mysqli_query($connect, $sql);
header('Location: ../addresults.php');
?>