<?php include '../include/connectionstring.php'?>
<?php
//fetch.php

$sql = "select * from tbl_results order by id DESC";
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
    <meta name="description" content="catchyourjob.in is a leading job website for freshers and experienced employers
    and students">
  <meta name="keywords" content="recruitment,jobs,current affars,job alert,govtjobs 2020">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
    <link href="dist/bootstrap-table.min.css" rel="stylesheet"/>
    <link href="dist/extentions/filter-control/bootstrap-table-filter-control.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
<link href="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.css" rel="stylesheet">
<!-- <link href="css/sidebar.css" rel="stylesheet"> -->
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <title>Latest Jobs alerts and results</title>
    <style>
  .btn-outline-success {
    background-color: aqua;
}
   .navbar-light .navbar-nav .nav-link {
 
    color: floralwhite;
}
li.nav-item {
  
    /* margin-right: 30px; */
    margin-left: 20px;
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
 </style>
  
  </head>
  <body>