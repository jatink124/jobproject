<?php

class Database{
	
	private $connection;

	function __construct()
	{
		$this->connect_db();
		
	}
	
	public function connect_db(){
//  $this->connection = mysqli_connect('148.66.145.152', 'dbdent', 'dbdent', 'mynewdental');
$this->connection = mysqli_connect('localhost', 'root', '', 'findsarkarijob');

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
    public function create_jobdetail($Companyname,$JobTitle,$typeofjob,$eligibility,$joblocation,$state,$totalvacancies,
    $dateadded,$lastdatetoapply,$Keywords){
		$sql = "INSERT INTO `jobdetail` (companyname,jobtitle,typeofjob,eligibility,joblocation,state,
        totalvacancies,dateadded,lastdatetoapply,tags) 
        VALUES ('$Companyname','$JobTitle','$typeofjob' ,'$eligibility','$joblocation','$state','$totalvacancies', 
        '$dateadded','$lastdatetoapply','$Keywords')";
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
		$sql = "SELECT * FROM `crud`";
		if($id){ $sql .= " WHERE id=$id";}
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