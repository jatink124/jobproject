<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
     //  if(!empty($_POST["CompanyName"]))  
     //  {  
     //       $error = "<label class='text-danger'>Enter Name</label>";  
     //  }  
    
     if(file_exists('pages/main_page_data.json'))  
           {  
                $current_data = file_get_contents('pages/main_page_data.json');  
            
                $array_data = json_decode($current_data, true);  
          //     if(!empty($_POST['eligibility'])){
          //       $checkBox = implode(',', $_POST['eligibility']);}
          //       else{
          //            $checkBox='';
          //       }
                $file = file_get_contents("pages/main_page_data.json");
                $data = json_decode($file, true);
                
                // Get last id
                $last_item    = count($data);
                // $imagelink = $last_item.'_'.$_POST['imagelink'];
               
                // if(!empty($_POST['Jobadded'])){
                // $jobAdded = date("d-m-Y", strtotime( $_POST['Jobadded']));}
                // else{
                //     $jobAdded='';    
                // }
               $qualificationdetails = ucwords(strtolower(( $_POST['qualificationdetails'])));
               $agelimit = ucwords(strtolower(( $_POST['agelimit'])));
               $address = ucwords(strtolower(( $_POST['address'])));
               $applicationprocedure = ucwords(strtolower(( $_POST['applicationprocedure'])));
               $selectionprocedure = ucwords(strtolower(( $_POST['selectionprocedure'])));
               $importantinstruction = ucwords(strtolower(( $_POST['importantinstruction'])));
               $generalcondition = ucwords(strtolower(( $_POST['generalcondition'])));
            
                $extra = array(  
                     'id'                    =>     (++$last_item)-1,
                     'qualificationdetails'  =>    ucwords(strtolower($qualificationdetails)),
                     'agelimit'              =>     ucwords(strtolower($agelimit)),
                     'address'               =>    ucwords(strtolower($address)),
                     'applicationprocedure'  =>    ucwords(strtolower($applicationprocedure)),
                     'selectionprocedure'    =>    ucwords(strtolower($selectionprocedure)),
                     'importantinstruction'  =>     ucwords(strtolower($importantinstruction)),
                     'importantinstruction'  =>     ucwords(strtolower($importantinstruction)),
                    'generalcondition' =>     ucwords(strtolower($generalcondition)),
                     );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('pages/main_page_data.json', $final_data))  
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
