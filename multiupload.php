<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
     //  if(!empty($_POST["CompanyName"]))  
     //  {  
     //       $error = "<label class='text-danger'>Enter Name</label>";  
     //  }  
    
     if(file_exists('dataa.json'))  
           {  
                $current_data = file_get_contents('dataa.json');  
            
                $array_data = json_decode($current_data, true);  
          //     if(!empty($_POST['eligibility'])){
          //       $checkBox = implode(',', $_POST['eligibility']);}
          //       else{
          //            $checkBox='';
          //       }
                $file = file_get_contents("dataa.json");
                $data = json_decode($file, true);
                
                // Get last id
                $last_item    = count($data);
                // $imagelink = $last_item.'_'.$_POST['imagelink'];
               
                if(!empty($_POST['Jobadded'])){
                $jobAdded = date("d-m-Y", strtotime( $_POST['Jobadded']));}
                else{
                    $jobAdded='';    
                }
                if(!empty($_POST['lastdate'])){
                $lastadd = date("d-m-Y", strtotime( $_POST['lastdate']));}
                else{
                    $lastadd='';    
                }
                if(!empty($_POST['lastdateoffee'])){
                $lastdateoffee = date("d-m-Y", strtotime( $_POST['lastdateoffee']));}
                else{
                    $lastdateoffee='';    
                }
                $jobtitle = $_POST['JobTitle'];
                $jobtitle = ucwords(strtolower(($jobtitle)));
                $extra = array(  
                     'id'                    =>     (++$last_item)-1,
                     'CompanyName'           =>    ucwords(strtolower($_POST['CompanyName'])),
                     'JobTitle'              =>     ucwords(strtolower($_POST['JobTitle'])),
                     'Eligibility'           =>    ucwords(strtolower($_POST['eligibility'])),
                     'JobLocation'           =>    ucwords(strtolower($_POST['joblocation'])),
                     'TotalVacancies'        =>     $_POST['totalvacancies'],
                     'jobdateadded'          =>     ucwords(strtolower($jobAdded)),
                     'joblastdate'           =>     $lastadd,
                    'educationqualification' =>     ucwords(strtolower($_POST['educationqualification'])),
                     'tags'                  =>     ucwords(strtolower($_POST['tags'])),
                     'typeofjob'             =>     $_POST['typeofjob'],
                      'xyz'                 =>             array(
                        "job_1_posts"       => $_POST['jobtitle1'],
                        "author"            => "Nicholas C. Zakas"
                    ),
                     'MainLink'              =>     $_POST['mainlink'],
                     'pdflink'               =>     $_POST['pdflink'],
                     'Pay'                   =>     $_POST['pay'],
                     'lastdateoffee'         =>      $lastdateoffee,
                     'status'                =>      $_POST['status'],
                     'imagelink'             =>     $_POST['imagelink'],
                     'State'                 =>    ucwords(strtolower($_POST['state'])),
                     'howtoapply'            =>    ucwords(strtolower($_POST['howtoapply']))
                    );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('dataa.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
        
 }  
 header('Location: add_job.php');
?>  
