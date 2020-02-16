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
//$this->connection = mysqli_connect('localhost', 'root', '', 'findsarkarijob');
$this->connection = mysqli_connect('194.59.164.180', 'u151583556_username_job', 'sarkaridb', 'u151583556_sarkarijob');

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

	public function read($id=null){
		$sql = "SELECT jb.imagelink,jb.main_intro,jb.id,tbn.bname,jb.boardid jbd,bd.boardid gh,bd.deptname,bd.posts,bd.salary,
		bd.qualification,tp.qualification mainqual,bd.jobrole,bd.agelimit,tp.Age_Limit al,jb.Eligibility,
		jb.JobLocation,jb.jobdateadded,jb.joblastdate,jb.tags,jb.typeofjob,jb.MainLink,jb.pdflink,jb.lastdateoffee,jb.status,jb.imagelink,
		jb.State,jb.main_intro,tp.post_id,bd.deptpostname,tp.Total_Vacancy,tp.Grade_Pay,tp.Age_Limit,tp.Qualification,
			  tp.Experience,tp.Duties,tp.Howtoapply,bd.desiredspecialization,bd.agerange          
			  FROM jobdetail jb 
			  INNER JOIN tbl_post tp ON jb.postid=tp.post_id
			  INNER JOIN tbl_boardname tbn        
			  ON jb.boardid=tbn.id LEFT JOIN tbl_boarddept bd ON tbn.id=bd.boardid 
			  LEFT JOIN tbl_agerange ar ON ar.id=bd.agerange 
			  ORDER BY jb.id ASC"; 
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
			  ON jb.boardid=tbn.id LEFT JOIN tbl_boarddept bd ON tbn.id=bd.boardid group BY jb.postid  ORDER BY jb.id ASC;"; 
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
		$sql = "SELECT  jb.id,tbs.statename,jb.boardid,jb.imagelink,jb.main_intro,tbn.bname,bd.deptname,bd.posts,bd.salary,bd.qualification,bd.jobrole,bd.agelimit,jb.Eligibility,
		jb.JobLocation,jb.jobdateadded,jb.joblastdate,jb.tags,jb.typeofjob,jb.MainLink,jb.pdflink,jb.lastdateoffee,jb.status,jb.imagelink,jb.State,jb.main_intro,
		tp.post_id,tp.post_name,tp.Total_Vacancy,tp.Grade_Pay,tp.Age_Limit,tp.Qualification,
			  tp.Experience,tp.Duties,tp.Howtoapply        
			  FROM jobdetail jb 
			  INNER JOIN tbl_post tp ON jb.postid=tp.post_id
			  INNER JOIN tbl_boardname tbn        
			  ON jb.boardid=tbn.id LEFT JOIN tbl_boarddept bd ON tbn.id=bd.boardid LEFT JOIN tbl_state tbs ON tbs.id=jb.State
    WHERE jb.State = $sid group BY jb.postid ORDER BY jb.id ASC";
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
	public function read_elig($eligid){
		$sql = "SELECT  jb.id,tbel.qual,tbs.statename,tbj.boardjobname,jb.boardid,jb.imagelink,jb.main_intro,tbn.bname,bd.deptname,bd.posts,bd.salary,bd.qualification,bd.jobrole,bd.agelimit,jb.Eligibility,
		jb.JobLocation,jb.jobdateadded,jb.joblastdate,jb.tags,jb.typeofjob,jb.MainLink,jb.pdflink,jb.lastdateoffee,jb.status,jb.imagelink,jb.State,jb.main_intro,
		tp.post_id,tp.post_name,tp.Total_Vacancy,tp.Grade_Pay,tp.Age_Limit,tp.Qualification,
			  tp.Experience,tp.Duties,tp.Howtoapply        
			  FROM jobdetail jb 
			  INNER JOIN tbl_post tp ON jb.postid=tp.post_id
			  INNER JOIN tbl_boardname tbn        
			  ON jb.boardid=tbn.id LEFT JOIN tbl_boarddept bd ON tbn.id=bd.boardid LEFT JOIN tbl_state tbs ON tbs.id=jb.State
  LEFT JOIN tbl_board_jobs tbj  ON tbj.id=jb.boardjob LEFT JOIN tbl_eligibility tbel  ON jb.eligjob=tbel.id
    WHERE jb.eligjob = $eligid group BY jb.postid ORDER BY jb.id ASC";
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