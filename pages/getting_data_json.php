
<?php
    $data = file_get_contents("./dataa.json");  
   $data = json_decode($data, true);  
  // $cn = $data[0]["CompanyName"];
  //  $len = count($data);
  
  //  for($x=0;$x<=$len;$x++)  
  //  {  
  //     for($y=0;$y<=$len)
  //   $data[$x][cn]= $data[$x]["CompanyName"];  
  //   echo $data[$x][cn];
 
    
  //   }  
  $i=0;$j=0;$initid=0;$initelig=0;$initstart=0;
  $initlast=0;$initimglink=0;$initmainintro=0;
  $initmainlink=0;$initpdflink=0;$initqual=0;
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
       elseif($_key=="id"){
        $mainid[$initid] = $val;
        $initid++;
       }
       elseif($_key=="educationqualification"){
        $mainqual[$initqual] = $val;
        $initqual++;
       }
      }
    }

}


 ?>