<?php include '../include/connectionstring.php'?>
<?php
//fetch.php

$sql = "select * from tbl_results";
$resultdata = mysqli_query($connect, $sql);

?>
<!doctype html>
<html lang="en">
  <head>
 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-J6LKDHH5Z9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-J6LKDHH5Z9');
</script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
   <?php if (isset($_GET['loc'])){ if(!empty($statename)){?>
   
   <title>Jobs in <?php echo $statename[0]; ?></title>
    <meta name="description" content="Find latest-jobs,news in <?php echo $statename[0]; ?>,Check Eligibility,Experience for jobs in <?php echo $statename[0]; ?>"><?php } else { ?> <title>Jobs in <?php echo $name; ?></title>
    <meta name="description" content="Find latest-jobs,news in <?php echo $name; ?>,Check Eligibility,Experience for jobs in <?php echo $name; ?>"> <?php } } ?>
    <?php if (isset($_GET['toj'])){?>
   <title><?php echo $newtojname; ?></title>
    <meta name="description" content="Find latest-jobs,news in <?php echo $newtojname; ?>,Check Eligibility,Experience for jobs in <?php echo $newtojname; ?>"><?php } ?>
    <?php if (isset($_GET['qual'])){ if(!empty($qualname)){?>
   <title>Jobs for <?php echo $newqualname; ?> pass job</title>
    <meta name="description" content="Find latest-jobs,news for <?php echo $newqualname; ?> qualification,Check Eligibility,Experience for jobs in <?php echo $newqualname; ?>"><?php } else { ?>  <title>Jobs for <?php echo $newqualname; ?> pass job</title>
    <meta name="description" content="Find latest-jobs,news for <?php echo $newqualname; ?> qualification,Check Eligibility,Experience for jobs in <?php echo $newqualname; ?>"> <?php } } ?>
    <?php if (isset($_GET['s'])){?>
   <title>Job Post as <?php echo $deptpostname[0]; ?></title>
    <meta name="description" content="Find latest-jobs,news,Check Eligibility,Experience for the post of <?php echo $deptpostname[0]; ?>"><?php } ?>
  
  <meta name="keywords" content="recruitment,jobs,current affars,job alert,govtjobs 2020">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
    <link href="dist/bootstrap-table.min.css" rel="stylesheet"/>
    <link href="dist/extentions/filter-control/bootstrap-table-filter-control.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
<link href="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.css" rel="stylesheet">
   
    <?php include '../pages/baseroute.php' ?>
    <link rel="icon" type="image/png" sizes="192x192" href="/catchfavicon.png">
    
    <style>
   .navbar-light .navbar-nav .nav-link {
 
    color: floralwhite;
}
li.nav-item {
  
    /* margin-right: 30px; */
    margin-left: 25px;
    /* border: 2px solid #2f2390; */
}
      </style>
      <style>
      img.card-img-top {
    width: 333px;
    height: 100px;
}
      </style>
  <style>
    p.card-text.show-read-more .more-text{
        display: none;
    }
</style>
 <style>
 .navbar-dark .navbar-brand {
  font-size: xx-large;
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #ff00de, 0 0 70px #ff00de, 0 0 80px #ff00de, 0 0 100px #ff00de, 0 0 150px #ff00de;
}
 /* menu */
 .navbar-dark .navbar-nav .nav-link {
    font-size: 18px!important;
   color: floralwhite!important;
}
 /* menu */
 .table-dark td, .table-dark th, .table-dark thead th {
    border-color: #454d55;
    font-weight: bolder;
    color: black;
}
 </style>
  
  </head>
  <body>