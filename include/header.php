<!-- read json data -->
<?php
    $data = file_get_contents("dataa.json");  
   $data = json_decode($data, true);  
  // $cn = $data[0]["CompanyName"];
  //  $len = count($data);
  
  //  for($x=0;$x<=$len;$x++)  
  //  {  
  //     for($y=0;$y<=$len)
  //   $data[$x][cn]= $data[$x]["CompanyName"];  
  //   echo $data[$x][cn];
 
    
  //   }  
  $i=0;$j=0;$initelig=0;$initstart=0;$initlast=0;$initimglink=0;$initmainintro=0;$initmainlink=0;$initpdflink=0;
  foreach ($data as $key => $vall) {
    foreach($vall as $_key => $val){
   if($_key=="xyz"){
    foreach($val as $key => $valll){
      //  echo $valll;
     }
   }
   else{
     if($_key=="CompanyName"){
       $cn[$i] = $val;
       $i++;
      }
      elseif($_key=="JobTitle"){
        $jt[$j] = $val;
        $j++;
       }
       elseif($_key=="Eligibility"){
        $eligb[$initelig] = $val;
        $initelig++;
       }
       elseif($_key=="imagelink"){
        $imagelink[$initimglink] = $val;
        $initimglink++;
       }
       elseif($_key=="main_intro"){
        $mainintro[$initmainintro] = $val;
        $initmainintro++;
       }
       elseif($_key=="MainLink"){
        $mainlink[$initmainlink] = $val;
        $initmainlink++;
       }
       elseif($_key=="pdflink"){
        $mainpdflink[$initpdflink] = $val;
        $initpdflink++;
       }
     }
    }

}


 ?> 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
   .navbar-light .navbar-nav .nav-link {
 
    color: floralwhite;
}
li.nav-item {
  
    /* margin-right: 30px; */
    margin-left: 50px;
}
      </style>
      <style>
      img.card-img-top {
    width: 333px;
    height: 100px;
}
      </style>
  </head>
  <body>