<?php
$sid='';


class Database{
	
	private $connection;

	function __construct()
	{
		$this->connect_db();
		
	}
	
	public function connect_db(){
//  $this->connection = mysqli_connect('148.66.145.152', 'dbdent', 'dbdent', 'mynewdental');
$this->connection = mysqli_connect('localhost', 'root', '', 'findsarkarijob');
//$this->connection = mysqli_connect('194.59.164.180', 'u151583556_username_job', 'sarkaridb', 'u151583556_sarkarijob');

		if(mysqli_connect_error()){
			die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_errno());
		}
	}

	public function Authenticate($username,$password){
		//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM `user` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($this->connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
    return true;
	}
	else{
		return false;
	}
}

public function create_jobdetail($Companyname,$postname,$Eligibility,$JobLocation,$jobdateadded,
$joblastdate,$tags,$typeofjob,$MainLink,$pdflink,$lastdateoffee,$status,$imagelink,$State,$main_intro,$post_name,
$Total_Vacancy,$pay,$Grade_Pay,$Age_Limit,$Qualification,$Experience,$duties,$Howtoapply){
	// $sql = "select post_id from tbl_post";
	// $ree = mysqli_query($this->connection, $sql);
	// echo $ree[field_count];
	$sql = "INSERT INTO tbl_post (post_name,Total_Vacancy,Grade_Pay,Age_Limit,Qualification,Experience,Duties,Howtoapply) VALUES ('$postname','$Total_Vacancy', '$Grade_Pay','$Age_Limit','$Qualification','$Experience','$duties','$Howtoapply')";
	if (mysqli_query($this->connection, $sql)) {
		$last_id = mysqli_insert_id($this->connection);
		echo "New record created successfully. Last inserted ID is: " . $last_id;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
	}
	$sql = "INSERT INTO `jobdetail` (CompanyName,postid,Eligibility,JobLocation,jobdateadded,joblastdate,tags,typeofjob,
	MainLink,pdflink,lastdateoffee,status,imagelink,State,main_intro) VALUES ('$Companyname','$last_id', '$Eligibility', '$JobLocation',
	'$jobdateadded','$joblastdate','$tags','$typeofjob','$MainLink','$pdflink', '$lastdateoffee', '$status',
	'$imagelink','$State','$main_intro')";
$res = mysqli_query($this->connection, $sql);

	
	if($res){
		 return true;
	}else{
		return false;
	}
}

public function create($problem,$name, $number,$gender,$email,$New_Patient,$appointmentdate,$timming){
		$sql = "INSERT INTO `crud` (Problem,Name,Number,gender,email_id,New_Patient,appointment,timming) VALUES ('$problem','$name', '$number', '$gender','$email','$New_Patient','$appointmentdate','$timming')";
		$res = mysqli_query($this->connection, $sql);
		
		if($res){
	 		return true;
		}else{
			return false;
		}
	}
	public function create_admin($problem,$name, $number,$gender,$email,$New_Patient,$appointmentdate,$timming){
		$sql = "INSERT INTO `crud` (Problem,Name,Number,gender,email_id,New_Patient,appointment,timming) VALUES ('$problem','$name', '$number', '$gender','$email','$New_Patient','$appointmentdate','$timming')";
		$res = mysqli_query($this->connection, $sql);
		
		if($res){
	 		return true;
		}else{
			return false;
		}
	}
	public function create_comment($problem,$name,$number,$email,$gender,$New_Patient,$comment){
		$sql = "INSERT INTO `contact_db` (Dental_Problem,Name,Contact_Number,email,gender,New_Patient,comments) VALUES ('$problem','$name', '$number','$email' ,'$gender','$New_Patient','$comment')";
		$res = mysqli_query($this->connection, $sql);
		
		if($res){
	 		return true;
		}else{
			return false;
		}
	}
	public function create_register($username,$psw){
		$sql = "INSERT INTO `user` (username,password) VALUES ('$username','$psw')";
		$res = mysqli_query($this->connection, $sql);
		
		if($res){
	 		return true;
		}else{
			return false;
		}
	}
// Government Jobs
public function read_finance($fid){
	$sql = "SELECT jb.id,bd.id bdid,tbs.statename,jb.boardid,jb.imagelink,jb.main_intro,tbn.bname,bd.deptname,bd.posts,bd.salary,bd.qualification,bd.jobrole,bd.agelimit,jb.Eligibility,
	jb.JobLocation,jb.jobdateadded,jb.joblastdate,jb.tags,jb.typeofjob,jb.MainLink,jb.pdflink,jb.lastdateoffee,jb.status,jb.imagelink,jb.State,jb.main_intro,
	tp.post_id,tp.post_name,tp.Total_Vacancy,tp.Grade_Pay,tp.Age_Limit,tp.Qualification,
				  tp.Experience,tp.Duties,tp.Howtoapply,bd.deptpostname        
				  FROM jobdetail jb 
				  INNER JOIN tbl_post tp ON jb.postid=tp.post_id
				  INNER JOIN tbl_boardname tbn        
				  ON jb.boardid=tbn.id LEFT JOIN tbl_boarddept bd ON tbn.id=bd.boardid LEFT JOIN tbl_state tbs ON tbs.id=jb.State
		WHERE jb.typeofjob = $fid or bd.toj=$fid group BY jb.postid,bd.deptpostname ORDER BY jb.id ASC";
			if (mysqli_query($this->connection, $sql)) {
				$res = mysqli_query($this->connection, $sql);
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
			}
			// if($id){ $sql .= " WHERE id=$id";}
			$res = mysqli_query($this->connection, $sql);
			 return $res;
		}

		public function read_financedet($financejobsid){
			$sql = "SELECT tp.post_name,tbd.id,tbd.tags,tbd.deptname,tbd.deptpostname,tbd.posts,tbd.salary,tbd.qualification,tbd.agelimit,jd.MainLink,jd.pdflink,jd.imagelink,
			jd.main_intro,tble.qual,tbd.desiredspecialization from tbl_boarddept tbd inner JOIN jobdetail jd on tbd.boardid=jd.boardid inner JOIN
	  tbl_post tp on jd.postid=tp.post_id inner join tbl_eligibility tble
			on tble.id=tbd.deptelig   where tbd.id=$financejobsid";
			if (mysqli_query($this->connection, $sql)) {
				$res = mysqli_query($this->connection, $sql);
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
			}
			// if($id){ $sql .= " WHERE id=$id";}
			$res = mysqli_query($this->connection, $sql);
			 return $res;
		}

		public function read_financedetid($financejobsid){
			$sql = "SELECT jd.id,jd.tags,jd.MainLink,jd.pdflink,jd.imagelink,
			jd.main_intro,jd.Eligibility,tp.Total_Vacancy posts,tp.Experience,tp.Grade_Pay from jobdetail jd inner join tbl_post tp on jd.postid=tp.post_id where jd.id=$financejobsid LIMIT 1";
			if (mysqli_query($this->connection, $sql)) {
				$res = mysqli_query($this->connection, $sql);
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
			}
			// if($id){ $sql .= " WHERE id=$id";}
			$res = mysqli_query($this->connection, $sql);
			 return $res;
		}
// Government Jobs
	public function read_tagsdet($tagsid){
		$sql = "SELECT GROUP_CONCAT(distinct tble.qual order by tble.id) Eligibility,jb.imagelink,jb.main_intro,bd.id,tbn.bname,jb.boardid jbd,bd.boardid gh,bd.deptname,bd.posts,bd.salary,
		bd.qualification,tp.qualification mainqual,bd.jobrole,bd.agelimit,tp.Age_Limit al,
		jb.JobLocation,jb.jobdateadded,jb.joblastdate,jb.tags,jb.typeofjob,jb.MainLink,jb.pdflink,jb.lastdateoffee,jb.status,jb.imagelink,
		jb.State,jb.main_intro,tp.post_name,tp.post_id,bd.deptpostname,tp.Total_Vacancy,tp.Grade_Pay,tp.Age_Limit,tp.Qualification,
			  tp.Experience,tp.Duties,tp.Howtoapply,bd.desiredspecialization          
			  FROM tbl_boarddept bd inner JOIN jobdetail jb ON jb.boardid=bd.boardid
			  INNER JOIN tbl_post tp ON jb.postid=tp.post_id
			  INNER JOIN tbl_boardname tbn         
			  ON jb.boardid=tbn.id  inner join tbl_eligibility tble on FIND_IN_SET(tble.id,bd.deptelig) 
     where bd.id=$tagsid GROUP BY jb.id";
		if (mysqli_query($this->connection, $sql)) {
			$res = mysqli_query($this->connection, $sql);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
		}
		// if($id){ $sql .= " WHERE id=$id";}
		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}
	public function read_tagsindexdet($tagsindexid){
		$sql = "SELECT GROUP_CONCAT(distinct tble.qual order by tble.id) Eligibility,jb.imagelink,jb.main_intro,jb.id,tbn.bname,jb.boardid jbd,bd.boardid gh,bd.deptname,bd.posts,bd.salary,
		bd.qualification,tp.qualification mainqual,bd.jobrole,bd.agelimit,tp.Age_Limit al,
		jb.JobLocation,jb.jobdateadded,jb.joblastdate,jb.tags,jb.typeofjob,jb.MainLink,jb.pdflink,jb.lastdateoffee,jb.status,jb.imagelink,
		jb.State,jb.main_intro,tp.post_name,tp.post_id,bd.deptpostname,tp.Total_Vacancy,tp.Grade_Pay,tp.Age_Limit,tp.Qualification,
			  tp.Experience,tp.Duties,tp.Howtoapply,bd.desiredspecialization          
			  FROM jobdetail jb 
			  INNER JOIN tbl_post tp ON jb.postid=tp.post_id
			  INNER JOIN tbl_boardname tbn         
			  ON jb.boardid=tbn.id LEFT JOIN tbl_boarddept bd ON tbn.id=bd.boardid inner join tbl_eligibility tble on FIND_IN_SET(tble.id,jb.Eligibility) 
     where jb.id=$tagsindexid GROUP BY jb.id,bd.id";
		if (mysqli_query($this->connection, $sql)) {
			$res = mysqli_query($this->connection, $sql);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
		}
		// if($id){ $sql .= " WHERE id=$id";}
		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}
	public function read($id=null){
		$sql = "SELECT GROUP_CONCAT(distinct tble.qual order by tble.id) Eligibility,jb.imagelink,jb.main_intro,jb.id,tbn.bname,jb.boardid jbd,bd.boardid gh,bd.deptname,bd.posts,bd.salary,
		bd.qualification,tp.qualification mainqual,bd.jobrole,bd.agelimit,tp.Age_Limit al,
		jb.JobLocation,jb.jobdateadded,jb.joblastdate,jb.tags,jb.typeofjob,jb.MainLink,jb.pdflink,jb.lastdateoffee,jb.status,jb.imagelink,
		jb.State,jb.main_intro,tp.post_name,tp.post_id,bd.deptpostname,tp.Total_Vacancy,tp.Grade_Pay,tp.Age_Limit,tp.Qualification,
			  tp.Experience,tp.Duties,tp.Howtoapply,bd.desiredspecialization          
			  FROM jobdetail jb 
			  INNER JOIN tbl_post tp ON jb.postid=tp.post_id
			  INNER JOIN tbl_boardname tbn         
			  ON jb.boardid=tbn.id LEFT JOIN tbl_boarddept bd ON tbn.id=bd.boardid inner join tbl_eligibility tble on FIND_IN_SET(tble.id,jb.Eligibility) 
  GROUP BY jb.id,bd.id order by jb.id desc"; 
		if (mysqli_query($this->connection, $sql)) {
			$res = mysqli_query($this->connection, $sql);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
		}
		// if($id){ $sql .= " WHERE id=$id";}
		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}

	public function read_index($id=null){
		$sql = "SELECT  jb.id,jb.boardid,jb.imagelink,jb.main_intro,tbn.bname,bd.deptname,bd.posts,bd.salary,bd.qualification,bd.jobrole,bd.agelimit,jb.Eligibility,
		jb.JobLocation,jb.jobdateadded,jb.joblastdate,jb.tags,jb.typeofjob,jb.MainLink,jb.pdflink,jb.lastdateoffee,jb.status,jb.imagelink,jb.State,jb.main_intro,
		tp.post_id,tp.post_name,tp.Total_Vacancy,tp.Grade_Pay,tp.Age_Limit,tp.Qualification,
			  tp.Experience,tp.Duties,tp.Howtoapply        
			  FROM jobdetail jb 
			  INNER JOIN tbl_post tp ON jb.postid=tp.post_id
			  INNER JOIN tbl_boardname tbn        
			  ON jb.boardid=tbn.id LEFT JOIN tbl_boarddept bd ON tbn.id=bd.boardid  group BY jb.postid  ORDER BY jb.id DESC;"; 
		if (mysqli_query($this->connection, $sql)) {
			$res = mysqli_query($this->connection, $sql);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
		}
		// if($id){ $sql .= " WHERE id=$id";}
		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}

	public function search_index($qual,$toj,$state,$latest){
		$sql = "SELECT GROUP_CONCAT(distinct tble.qual order by tble.id) qual,GROUP_CONCAT(distinct tbj.tojname order by tbj.id desc SEPARATOR ',\n') tojname,
		GROUP_CONCAT(distinct tbs.statename order by tbs.id) statename,tp.post_name,jb.id,bd.id bdid,bd.deptpostname,jb.boardid,jb.state,jb.typeofjob,bd.toj,jb.eligjob,bd.deptelig,jb.boardid,jb.imagelink,jb.main_intro,tbn.bname,bd.deptname,bd.posts,bd.salary,bd.qualification,bd.jobrole,bd.agelimit,jb.Eligibility,
			  jb.JobLocation,jb.jobdateadded,jb.joblastdate,jb.tags,jb.typeofjob,jb.MainLink,jb.pdflink,jb.lastdateoffee,jb.status,jb.imagelink,jb.State,jb.main_intro,
			  tp.post_id,tp.post_name,tp.Total_Vacancy,tp.Grade_Pay,tp.Age_Limit,tp.Qualification,
					tp.Experience,tp.Duties,tp.Howtoapply        
					FROM jobdetail jb 
					INNER JOIN tbl_post tp ON jb.postid=tp.post_id
					left JOIN tbl_boardname tbn        
					ON jb.boardid=tbn.id LEFT JOIN tbl_boarddept bd ON tbn.id=bd.boardid inner join tbl_state tbs on FIND_IN_SET(tbs.id,jb.State)
		inner join tbl_typeofjob tbj on FIND_IN_SET(tbj.id,jb.typeofjob) inner join tbl_eligibility tble on FIND_IN_SET(tble.id,jb.Eligibility)
		where (jb.Eligibility like '$qual' or jb.Eligibility like '%,$qual,%' or jb.Eligibility like '%$qual,%' or jb.Eligibility like '%,$qual%' or bd.deptelig like '%,$qual,%' or bd.deptelig like '$qual') or 
  (jb.typeofjob like '$toj' or jb.typeofjob like '%,$toj,%' or bd.toj like '%,$toj,%' or bd.toj like '$toj') or (jb.State like '$state' or bd.state like '%,$state,%' or bd.state like '$state')
  or (jb.boardid like '$latest') 
  group BY jb.id,bd.id ORDER BY jb.id desc;"; 
		if (mysqli_query($this->connection, $sql)) {
			$res = mysqli_query($this->connection, $sql);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
		}
		// if($id){ $sql .= " WHERE id=$id";}
		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}

	public function search_index_multiple($qual,$toj,$state){
		$sql = "SELECT jb.id,bd.id bdid,bd.deptpostname,jb.boardid,jb.state,jb.typeofjob jbtoj,jb.eligjob,bd.toj,bd.deptelig,jb.imagelink,jb.main_intro,tbn.bname,bd.deptname,bd.posts,bd.salary,bd.qualification,bd.jobrole,bd.agelimit,jb.Eligibility,
		jb.JobLocation,jb.jobdateadded,jb.joblastdate,jb.tags,jb.typeofjob,jb.MainLink,jb.pdflink,jb.lastdateoffee,jb.status,jb.imagelink,jb.State,jb.main_intro,
		tp.post_id,tp.post_name,tp.Total_Vacancy,tp.Grade_Pay,tp.Age_Limit,tp.Qualification,
			  tp.Experience,tp.Duties,tp.Howtoapply        
			  FROM jobdetail jb 
			  INNER JOIN tbl_post tp ON jb.postid=tp.post_id
			  left JOIN tbl_boardname tbn        
			  ON jb.boardid=tbn.id LEFT JOIN tbl_boarddept bd ON tbn.id=bd.boardid where (jb.eligjob like '%$qual%' and  jb.typeofjob like '%$toj%') OR
     (bd.deptelig like '%$qual%' and  bd.toj like '%$toj%') or  (jb.eligjob like '%$qual%' and jb.state like '%$state%') OR
     (bd.deptelig like '%$qual%' and  jb.state like '%$state%') or (jb.state like '%$state%' and  jb.typeofjob like '%$toj%') OR
     (jb.state like '%$state%' and  bd.toj like '%$toj%') OR
     (jb.state like '%$state%' and  jb.typeofjob like '%$toj%' and jb.eligjob like '%$qual%' ) OR
      (jb.state like '%$state%' and  bd.toj like '%$toj%' and bd.deptelig like '%$qual%' )
      group BY bd.id  ORDER BY jb.id DESC;"; 
		if (mysqli_query($this->connection, $sql)) {
			$res = mysqli_query($this->connection, $sql);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
		}
		
		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}
	// public function search_index_multiple($qual,$toj,$state){
	// 	$sql = "SELECT *       
	// 		  FROM jobdetail jb 
	// 		   where (jb.eligjob like '%$qual%' and  jb.typeofjob like '%$toj%') OR
    //    (jb.eligjob like '%$qual%' and jb.state like '%$state%') 
    //   or (jb.state like '%$state%' and  jb.typeofjob like '%$toj%') OR
     
    //  (jb.state like '%$state%' and  jb.typeofjob like '%$toj%' and jb.eligjob like '%$qual%' ) 
    //   group BY bd.id  ORDER BY jb.id DESC;"; 
	// 	if (mysqli_query($this->connection, $sql)) {
	// 		$res = mysqli_query($this->connection, $sql);
	// 	} else {
	// 		echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
	// 	}
		
	// 	$res = mysqli_query($this->connection, $sql);
 	// 	return $res;
	// }
	
	public function read_state_bihar($sid){
$sql = "SELECT jb.id,bd.id bdid,tbs.statename,jb.boardid,jb.imagelink,jb.main_intro,tbn.bname,bd.deptname,bd.posts,bd.salary,bd.qualification,bd.jobrole,bd.agelimit,jb.Eligibility,
jb.JobLocation,jb.jobdateadded,jb.joblastdate,jb.tags,jb.typeofjob,jb.MainLink,jb.pdflink,jb.lastdateoffee,jb.status,jb.imagelink,jb.State,jb.main_intro,
tp.post_id,tp.post_name,tp.Total_Vacancy,tp.Grade_Pay,tp.Age_Limit,tp.Qualification,
			  tp.Experience,tp.Duties,tp.Howtoapply,bd.deptpostname        
			  FROM jobdetail jb 
			  INNER JOIN tbl_post tp ON jb.postid=tp.post_id
			  INNER JOIN tbl_boardname tbn        
			  ON jb.boardid=tbn.id LEFT JOIN tbl_boarddept bd ON tbn.id=bd.boardid LEFT JOIN tbl_state tbs ON tbs.id=jb.State
    WHERE jb.State = $sid or bd.state=$sid group BY jb.postid,bd.deptpostname ORDER BY jb.id ASC";
		if (mysqli_query($this->connection, $sql)) {
			$res = mysqli_query($this->connection, $sql);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
		}
		// if($id){ $sql .= " WHERE id=$id";}
		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}
	public function read_state_karnataka($sid){
		$sql = "SELECT jb.id,bd.id bdid,tbs.statename,jb.boardid,jb.imagelink,jb.main_intro,tbn.bname,bd.deptname,bd.posts,bd.salary,bd.qualification,bd.jobrole,bd.agelimit,jb.Eligibility,
		jb.JobLocation,jb.jobdateadded,jb.joblastdate,jb.tags,jb.typeofjob,jb.MainLink,jb.pdflink,jb.lastdateoffee,jb.status,jb.imagelink,jb.State,jb.main_intro,
		tp.post_id,tp.post_name,tp.Total_Vacancy,tp.Grade_Pay,tp.Age_Limit,tp.Qualification,
					  tp.Experience,tp.Duties,tp.Howtoapply,bd.deptpostname        
					  FROM jobdetail jb 
					  INNER JOIN tbl_post tp ON jb.postid=tp.post_id
					  INNER JOIN tbl_boardname tbn        
					  ON jb.boardid=tbn.id LEFT JOIN tbl_boarddept bd ON tbn.id=bd.boardid LEFT JOIN tbl_state tbs ON tbs.id=jb.State
			WHERE jb.State = $sid or bd.boardid=75 group BY jb.id,bd.id ORDER BY jb.id ASC";
				if (mysqli_query($this->connection, $sql)) {
					$res = mysqli_query($this->connection, $sql);
				} else {
					echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
				}
				// if($id){ $sql .= " WHERE id=$id";}
				$res = mysqli_query($this->connection, $sql);
				 return $res;
			}
	public function read_state($sid){
		$sql = "SELECT  jb.id,bd.id bdid,tbs.statename,jb.boardid,jb.imagelink,jb.main_intro,tbn.bname,bd.deptname,bd.posts,bd.salary,bd.qualification,bd.jobrole,bd.agelimit,jb.Eligibility,
		jb.JobLocation,jb.jobdateadded,jb.joblastdate,jb.tags,jb.typeofjob,jb.MainLink,jb.pdflink,jb.lastdateoffee,jb.status,jb.imagelink,jb.State,jb.main_intro,
		tp.post_id,bd.deptpostname,tp.post_name,tp.Total_Vacancy,tp.Grade_Pay,tp.Age_Limit,tp.Qualification,
			  tp.Experience,tp.Duties,tp.Howtoapply,bd.deptpostname        
			  FROM jobdetail jb 
			  INNER JOIN tbl_post tp ON jb.postid=tp.post_id
			  INNER JOIN tbl_boardname tbn        
			  ON jb.boardid=tbn.id LEFT JOIN tbl_boarddept bd ON tbn.id=bd.boardid LEFT JOIN tbl_state tbs ON tbs.id=jb.State
    WHERE jb.State = $sid group BY jb.postid,bd.deptpostname ORDER BY jb.id ASC";
		if (mysqli_query($this->connection, $sql)) {
			$res = mysqli_query($this->connection, $sql);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
		}
		// if($id){ $sql .= " WHERE id=$id";}
		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}
	public function read_bihardet($biharjobsid){
		$sql = "SELECT tbd.id,tbd.tags,tbd.deptname,tbd.deptpostname,tbd.posts,tbd.salary,tbd.qualification,tbd.agelimit,jd.MainLink,jd.pdflink,jd.imagelink,
		jd.main_intro,tble.qual,tbd.desiredspecialization from tbl_boarddept tbd inner JOIN jobdetail jd on tbd.boardid=jd.boardid inner join tbl_eligibility tble
		on tble.id=tbd.deptelig  where tbd.id=$biharjobsid";
		if (mysqli_query($this->connection, $sql)) {
			$res = mysqli_query($this->connection, $sql);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
		}
		// if($id){ $sql .= " WHERE id=$id";}
		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}
	public function read_bihardetid($biharjobsid){
		$sql = "SELECT jd.id,jd.tags,jd.MainLink,jd.pdflink,jd.imagelink,
		jd.main_intro,jd.Eligibility,tp.Total_Vacancy posts,tp.Experience,tp.Grade_Pay from jobdetail jd inner join tbl_post tp on jd.postid=tp.post_id where jd.id=$biharjobsid LIMIT 1";
		if (mysqli_query($this->connection, $sql)) {
			$res = mysqli_query($this->connection, $sql);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
		}
		// if($id){ $sql .= " WHERE id=$id";}
		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}
	public function read_noidadet($noidajobsid){
		$sql = "SELECT tp.post_name,tbd.id,tbd.tags,tbd.deptname,tbd.deptpostname,tbd.posts,tbd.salary,tbd.qualification,tbd.agelimit,jd.MainLink,jd.pdflink,jd.imagelink,
		jd.main_intro,tble.qual,tbd.desiredspecialization from tbl_boarddept tbd inner JOIN jobdetail jd on tbd.boardid=jd.boardid inner JOIN
  tbl_post tp on jd.postid=tp.post_id inner join tbl_eligibility tble
		on tble.id=tbd.deptelig   where tbd.id=$noidajobsid";
		if (mysqli_query($this->connection, $sql)) {
			$res = mysqli_query($this->connection, $sql);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
		}
		// if($id){ $sql .= " WHERE id=$id";}
		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}
	public function read_himachaldet($himachaljobsid){
		$sql = "SELECT tbd.id,tbd.tags,tp.post_name,tbd.deptname,tbd.deptpostname,tbd.posts,tbd.salary,tbd.qualification,tbd.agelimit,jd.MainLink,jd.pdflink,jd.imagelink,
		jd.main_intro,tble.qual,tbd.desiredspecialization from tbl_boarddept tbd inner JOIN jobdetail jd
		 on tbd.boardid=jd.boardid inner join tbl_post tp on tp.post_id=jd.postid inner join tbl_eligibility tble
		on tble.id=tbd.deptelig  where tbd.id=$himachaljobsid";
		if (mysqli_query($this->connection, $sql)) {
			$res = mysqli_query($this->connection, $sql);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
		}
		// if($id){ $sql .= " WHERE id=$id";}
		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}
	public function read_himachaldetid($himachaljobsid){
		$sql = "SELECT jd.id,jd.tags,tp.Age_Limit,tp.post_name,jd.MainLink,jd.pdflink,jd.imagelink,
		jd.main_intro,jd.Eligibility,tp.Total_Vacancy posts,tp.Experience,tp.Grade_Pay from jobdetail jd inner join tbl_post tp on jd.postid=tp.post_id where jd.id=$himachaljobsid LIMIT 1";
		if (mysqli_query($this->connection, $sql)) {
			$res = mysqli_query($this->connection, $sql);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
		}
		// if($id){ $sql .= " WHERE id=$id";}
		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}
	public function read_delhidet($delhijobsid){
		$sql = "SELECT tbd.id,tbd.tags,tp.post_name,tbd.deptname,tbd.deptpostname,tbd.posts,tbd.salary,tbd.qualification,tbd.agelimit,jd.MainLink,jd.pdflink,jd.imagelink,
		jd.main_intro,tble.qual,tbd.desiredspecialization from tbl_boarddept tbd inner JOIN jobdetail jd
		 on tbd.boardid=jd.boardid inner join tbl_post tp on tp.post_id=jd.postid inner join tbl_eligibility tble
		on tble.id=tbd.deptelig  where tbd.id=$delhijobsid";
		if (mysqli_query($this->connection, $sql)) {
			$res = mysqli_query($this->connection, $sql);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
		}
		// if($id){ $sql .= " WHERE id=$id";}
		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}
	public function read_delhidetid($delhijobsid){
		$sql = "SELECT jd.id,jd.tags,tp.Age_Limit,tp.post_name,jd.MainLink,jd.pdflink,jd.imagelink,
		jd.main_intro,jd.Eligibility,tp.Total_Vacancy posts,tp.Experience,tp.Grade_Pay from jobdetail jd inner join tbl_post tp on jd.postid=tp.post_id where jd.id=$delhijobsid LIMIT 1";
		if (mysqli_query($this->connection, $sql)) {
			$res = mysqli_query($this->connection, $sql);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
		}
		// if($id){ $sql .= " WHERE id=$id";}
		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}


	public function read_elig($eligid){
		$sql = "SELECT  jb.id,bd.id bdid,tbel.qual,tbs.statename,tbj.boardjobname,jb.boardid,jb.imagelink,jb.main_intro,tbn.bname,bd.deptname,bd.posts,bd.salary,bd.qualification,bd.jobrole,bd.agelimit,jb.Eligibility,
		jb.JobLocation,jb.jobdateadded,jb.joblastdate,jb.tags,jb.typeofjob,jb.MainLink,jb.pdflink,jb.lastdateoffee,jb.status,jb.imagelink,jb.State,jb.main_intro,
		tp.post_id,tp.post_name,tp.Total_Vacancy,tp.Grade_Pay,tp.Age_Limit,tp.Qualification,
			  tp.Experience,tp.Duties,tp.Howtoapply,bd.deptpostname        
			  FROM jobdetail jb 
			  INNER JOIN tbl_post tp ON jb.postid=tp.post_id
			  INNER JOIN tbl_boardname tbn        
			  ON jb.boardid=tbn.id LEFT JOIN tbl_boarddept bd ON tbn.id=bd.boardid LEFT JOIN tbl_state tbs ON tbs.id=jb.State
  LEFT JOIN tbl_board_jobs tbj  ON tbj.id=jb.boardjob LEFT JOIN tbl_eligibility tbel  ON jb.eligjob=tbel.id
    WHERE jb.eligjob = $eligid or bd.deptelig=$eligid group BY jb.postid,bd.deptpostname ORDER BY jb.id ASC";
		if (mysqli_query($this->connection, $sql)) {
			$res = mysqli_query($this->connection, $sql);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
		}
		// if($id){ $sql .= " WHERE id=$id";}
		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}

	public function read_eligdet($eligtenthid){
		$sql = "SELECT tbd.id,tbd.tags,tbd.deptname,tbd.deptpostname,tbd.posts,tbd.salary,tbd.qualification,tbd.agelimit,jd.MainLink,jd.pdflink,jd.imagelink,
		jd.main_intro from tbl_boarddept tbd inner JOIN jobdetail jd on tbd.boardid=jd.boardid  where tbd.id=$eligtenthid";
		if (mysqli_query($this->connection, $sql)) {
			$res = mysqli_query($this->connection, $sql);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
		}
		// if($id){ $sql .= " WHERE id=$id";}
		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}
	public function read_eligdetid($eligtenthid){
		$sql = "SELECT jd.id,jd.tags,jd.MainLink,jd.pdflink,jd.imagelink,
		jd.main_intro from jobdetail jd where jd.id=$eligtenthid and  jd.eligjob=1 LIMIT 1";
		if (mysqli_query($this->connection, $sql)) {
			$res = mysqli_query($this->connection, $sql);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
		}
		// if($id){ $sql .= " WHERE id=$id";}
		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}

	// grad query
	public function read_grad_elig($eligid){
		$sql = "SELECT  jb.id,bd.id bdid,tbel.qual,tbs.statename,tbj.boardjobname,jb.boardid,jb.imagelink,jb.main_intro,tbn.bname,bd.deptname,bd.posts,bd.salary,bd.qualification,bd.jobrole,bd.agelimit,jb.Eligibility,
		jb.JobLocation,jb.jobdateadded,jb.joblastdate,jb.tags,jb.typeofjob,jb.MainLink,jb.pdflink,jb.lastdateoffee,jb.status,jb.imagelink,jb.State,jb.main_intro,
		tp.post_id,tp.post_name,tp.Total_Vacancy,tp.Grade_Pay,tp.Age_Limit,tp.Qualification,
			  tp.Experience,tp.Duties,tp.Howtoapply,bd.deptpostname        
			  FROM jobdetail jb 
			  INNER JOIN tbl_post tp ON jb.postid=tp.post_id
			  INNER JOIN tbl_boardname tbn        
			  ON jb.boardid=tbn.id LEFT JOIN tbl_boarddept bd ON tbn.id=bd.boardid LEFT JOIN tbl_state tbs ON tbs.id=jb.State
  LEFT JOIN tbl_board_jobs tbj  ON tbj.id=jb.boardjob LEFT JOIN tbl_eligibility tbel  ON jb.eligjob=tbel.id
    WHERE jb.eligjob = $eligid or bd.deptelig=$eligid group BY jb.postid,bd.deptpostname ORDER BY jb.id ASC";
		if (mysqli_query($this->connection, $sql)) {
			$res = mysqli_query($this->connection, $sql);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
		}
		// if($id){ $sql .= " WHERE id=$id";}
		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}

	public function read_gradeligdet($eligtenthid){
		$sql = "SELECT tbd.id,tbd.tags,tbd.deptname,tbd.deptpostname,tbd.posts,tbd.salary,tbd.qualification,tbd.agelimit,jd.MainLink,jd.pdflink,jd.imagelink,
		jd.main_intro from tbl_boarddept tbd inner JOIN jobdetail jd on tbd.boardid=jd.boardid  where tbd.id=$eligtenthid";
		if (mysqli_query($this->connection, $sql)) {
			$res = mysqli_query($this->connection, $sql);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
		}
		// if($id){ $sql .= " WHERE id=$id";}
		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}
	public function read_gradeligdetid($eligtenthid){
		$sql = "SELECT jd.id,jd.tags,jd.MainLink,jd.pdflink,jd.imagelink,
		jd.main_intro from jobdetail jd where jd.id=$eligtenthid and  jd.eligjob=3 LIMIT 1";
		if (mysqli_query($this->connection, $sql)) {
			$res = mysqli_query($this->connection, $sql);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
		}
		// if($id){ $sql .= " WHERE id=$id";}
		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}

	// twelth query
	public function read_twelth_elig($eligid){
		$sql = "SELECT  jb.id,bd.id bdid,tbel.qual,tbs.statename,tbj.boardjobname,jb.boardid,jb.imagelink,jb.main_intro,tbn.bname,bd.deptname,bd.posts,bd.salary,bd.qualification,bd.jobrole,bd.agelimit,jb.Eligibility,
		jb.JobLocation,jb.jobdateadded,jb.joblastdate,jb.tags,jb.typeofjob,jb.MainLink,jb.pdflink,jb.lastdateoffee,jb.status,jb.imagelink,jb.State,jb.main_intro,
		tp.post_id,tp.post_name,tp.Total_Vacancy,tp.Grade_Pay,tp.Age_Limit,tp.Qualification,
			  tp.Experience,tp.Duties,tp.Howtoapply,bd.deptpostname        
			  FROM jobdetail jb 
			  INNER JOIN tbl_post tp ON jb.postid=tp.post_id
			  INNER JOIN tbl_boardname tbn        
			  ON jb.boardid=tbn.id LEFT JOIN tbl_boarddept bd ON tbn.id=bd.boardid LEFT JOIN tbl_state tbs ON tbs.id=jb.State
  LEFT JOIN tbl_board_jobs tbj  ON tbj.id=jb.boardjob LEFT JOIN tbl_eligibility tbel  ON jb.eligjob=tbel.id
    WHERE jb.eligjob = $eligid or bd.deptelig=$eligid group BY jb.postid,bd.deptpostname ORDER BY jb.id ASC";
		if (mysqli_query($this->connection, $sql)) {
			$res = mysqli_query($this->connection, $sql);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
		}
		// if($id){ $sql .= " WHERE id=$id";}
		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}

	public function read_tweltheligdet($eligtenthid){
		$sql = "SELECT tbd.id,tbd.tags,tbd.deptname,tbd.deptpostname,tbd.posts,tbd.salary,tbd.qualification,tbd.agelimit,jd.MainLink,jd.pdflink,jd.imagelink,
		jd.main_intro from tbl_boarddept tbd inner JOIN jobdetail jd on tbd.boardid=jd.boardid  where tbd.id=$eligtenthid and tbd.deptelig=2";
		if (mysqli_query($this->connection, $sql)) {
			$res = mysqli_query($this->connection, $sql);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
		}
		// if($id){ $sql .= " WHERE id=$id";}
		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}
	public function read_tweltheligdetid($eligtenthid){
		$sql = "SELECT jd.id,jd.tags,jd.MainLink,jd.pdflink,jd.imagelink,
		jd.main_intro from jobdetail jd where jd.id=$eligtenthid and  jd.eligjob=2 LIMIT 1";
		if (mysqli_query($this->connection, $sql)) {
			$res = mysqli_query($this->connection, $sql);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
		}
		// if($id){ $sql .= " WHERE id=$id";}
		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}

	// iti query
	public function read_iti_elig($eligid){
		$sql = "SELECT  jb.id,bd.id bdid,tbel.qual,tbs.statename,tbj.boardjobname,jb.boardid,jb.imagelink,jb.main_intro,tbn.bname,bd.deptname,bd.posts,bd.salary,bd.qualification,bd.jobrole,bd.agelimit,jb.Eligibility,
		jb.JobLocation,jb.jobdateadded,jb.joblastdate,jb.tags,jb.typeofjob,jb.MainLink,jb.pdflink,jb.lastdateoffee,jb.status,jb.imagelink,jb.State,jb.main_intro,
		tp.post_id,tp.post_name,tp.Total_Vacancy,tp.Grade_Pay,tp.Age_Limit,tp.Qualification,
			  tp.Experience,tp.Duties,tp.Howtoapply,bd.deptpostname        
			  FROM jobdetail jb 
			  INNER JOIN tbl_post tp ON jb.postid=tp.post_id
			  INNER JOIN tbl_boardname tbn        
			  ON jb.boardid=tbn.id LEFT JOIN tbl_boarddept bd ON tbn.id=bd.boardid LEFT JOIN tbl_state tbs ON tbs.id=jb.State
  LEFT JOIN tbl_board_jobs tbj  ON tbj.id=jb.boardjob LEFT JOIN tbl_eligibility tbel  ON jb.eligjob=tbel.id
    WHERE jb.eligjob = $eligid or bd.deptelig=$eligid group BY jb.postid,bd.deptpostname ORDER BY jb.id ASC";
		if (mysqli_query($this->connection, $sql)) {
			$res = mysqli_query($this->connection, $sql);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
		}
		// if($id){ $sql .= " WHERE id=$id";}
		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}

	public function read_itieligdet($eligtenthid){
		$sql = "SELECT tbd.id,tbd.tags,tbd.deptname,tbd.deptpostname,tbd.posts,tbd.salary,tbd.qualification,tbd.agelimit,jd.MainLink,jd.pdflink,jd.imagelink,
		jd.main_intro from tbl_boarddept tbd inner JOIN jobdetail jd on tbd.boardid=jd.boardid  where tbd.id=$eligtenthid and tbd.deptelig=14";
		if (mysqli_query($this->connection, $sql)) {
			$res = mysqli_query($this->connection, $sql);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
		}
		// if($id){ $sql .= " WHERE id=$id";}
		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}
	public function read_itieligdetid($eligtenthid){
		$sql = "SELECT jd.id,jd.tags,jd.MainLink,jd.pdflink,jd.imagelink,
		jd.main_intro from jobdetail jd where jd.id=$eligtenthid and  jd.eligjob=14 LIMIT 1";
		if (mysqli_query($this->connection, $sql)) {
			$res = mysqli_query($this->connection, $sql);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
		}
		// if($id){ $sql .= " WHERE id=$id";}
		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}
	public function read_boardjob($brdid){
		$sql = "SELECT  jb.id,tbs.statename,tbj.boardjobname,jb.boardid,jb.imagelink,jb.main_intro,tbn.bname,bd.deptname,bd.posts,bd.salary,bd.qualification,bd.jobrole,bd.agelimit,jb.Eligibility,
		jb.JobLocation,jb.jobdateadded,jb.joblastdate,jb.tags,jb.typeofjob,jb.MainLink,jb.pdflink,jb.lastdateoffee,jb.status,jb.imagelink,jb.State,jb.main_intro,
		tp.post_id,tp.post_name,tp.Total_Vacancy,tp.Grade_Pay,tp.Age_Limit,tp.Qualification,
			  tp.Experience,tp.Duties,tp.Howtoapply        
			  FROM jobdetail jb 
			  INNER JOIN tbl_post tp ON jb.postid=tp.post_id
			  INNER JOIN tbl_boardname tbn        
			  ON jb.boardid=tbn.id LEFT JOIN tbl_boarddept bd ON tbn.id=bd.boardid LEFT JOIN tbl_state tbs ON tbs.id=jb.State
  LEFT JOIN tbl_board_jobs tbj  ON tbj.id=jb.boardjob
    WHERE jb.boardjob = $brdid group BY jb.postid ORDER BY jb.id ASC";
		if (mysqli_query($this->connection, $sql)) {
			$res = mysqli_query($this->connection, $sql);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
		}
		// if($id){ $sql .= " WHERE id=$id";}
		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}

	public function read_boardjob_rbi($brdid){
		$sql = "SELECT  bd.id bdid,bd.deptpostname,jb.id,tbs.statename,tbj.boardjobname,jb.boardid,jb.imagelink,jb.main_intro,tbn.bname,bd.deptname,bd.posts,bd.salary,bd.qualification,bd.jobrole,bd.agelimit,jb.Eligibility,
		jb.JobLocation,jb.jobdateadded,jb.joblastdate,jb.tags,jb.typeofjob,jb.MainLink,jb.pdflink,jb.lastdateoffee,jb.status,jb.imagelink,jb.State,jb.main_intro,
		tp.post_id,tp.post_name,tp.Total_Vacancy,tp.Grade_Pay,tp.Age_Limit,tp.Qualification,
			  tp.Experience,tp.Duties,tp.Howtoapply        
			  FROM jobdetail jb 
			  INNER JOIN tbl_post tp ON jb.postid=tp.post_id
			  INNER JOIN tbl_boardname tbn        
			  ON jb.boardid=tbn.id LEFT JOIN tbl_boarddept bd ON tbn.id=bd.boardid LEFT JOIN tbl_state tbs ON tbs.id=jb.State
  LEFT JOIN tbl_board_jobs tbj  ON tbj.id=jb.boardjob
    WHERE jb.boardjob = $brdid group BY jb.id,bd.id ORDER BY jb.id ASC";
		if (mysqli_query($this->connection, $sql)) {
			$res = mysqli_query($this->connection, $sql);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
		}
		// if($id){ $sql .= " WHERE id=$id";}
		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}

	public function read_isro($isroid){
		$sql = "SELECT bd.id,jb.boardid,jb.imagelink,jb.main_intro,bd.deptpostname,bd.posts,bd.salary,bd.qualification,bd.jobrole,bd.agelimit,jb.Eligibility,
		jb.JobLocation,jb.jobdateadded,jb.joblastdate,jb.tags,jb.typeofjob,jb.MainLink,jb.pdflink,jb.lastdateoffee,jb.status,
  jb.imagelink,jb.State,jb.main_intro
FROM jobdetail jb inner JOIN tbl_boarddept bd ON jb.boardid=bd.boardid 
 WHERE jb.boardjob = $isroid  ORDER BY bd.id ASC";
		if (mysqli_query($this->connection, $sql)) {
			$res = mysqli_query($this->connection, $sql);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
		}
		// if($id){ $sql .= " WHERE id=$id";}
		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}

	public function read_ssc($sscid){
		$sql = "SELECT bd.id,jb.boardid,jb.imagelink,jb.main_intro,bd.deptpostname,bd.posts,bd.salary,bd.qualification,bd.jobrole,bd.agelimit,jb.Eligibility,
		jb.JobLocation,jb.jobdateadded,jb.joblastdate,jb.tags,jb.typeofjob,jb.MainLink,jb.pdflink,jb.lastdateoffee,jb.status,
  jb.imagelink,jb.State,jb.main_intro
FROM jobdetail jb inner JOIN tbl_boarddept bd ON jb.boardid=bd.boardid 
 WHERE jb.boardjob = $sscid  ORDER BY bd.id ASC";
		if (mysqli_query($this->connection, $sql)) {
			$res = mysqli_query($this->connection, $sql);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
		}
		// if($id){ $sql .= " WHERE id=$id";}
		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}
	
	public function read_contacts($id=null){
		$sql = "SELECT * FROM `contact_db`";
		if($id){ $sql .= " WHERE id=$id";}
 		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}
	public function readapptimm($id=null){
		$sql = "SELECT CONCAT(appointment,timming) AS apptimm  FROM `crud`";
		if($id){ $sql .= " WHERE id=$id";}
 		$res = mysqli_query($this->connection, $sql);
 		return $res;
		}

	public function update($fname,$lname,$email,$gender,$age, $id){
		$sql = "UPDATE `crud` SET first_name='$fname', last_name='$lname', email_id='$email', gender='$gender', age='$age' WHERE id=$id";
		$res = mysqli_query($this->connection, $sql);
		if($res){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$sql = "DELETE FROM `crud` WHERE id=$id";
 		$res = mysqli_query($this->connection, $sql);
 		if($res){
 			return true;
 		}else{
 			return false;
 		}
	}

	public function sanitize($var){
		$return = mysqli_real_escape_string($this->connection, $var);
		return $return;
	}

}

$database = new Database();

?>