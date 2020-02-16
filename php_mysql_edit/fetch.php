<?php include '../include/connectionstring.php'?>
<?php
//fetch.php
// $connect = mysqli_connect("localhost", "root", "", "findsarkarijob");
$columns = array('CompanyName', 'Eligibility');

$queryy = "SELECT jb.id,tbn.bname,tbs.statename,jb.Eligibility,jb.JobLocation,jb.jobdateadded,jb.joblastdate,
		jb.tags,jb.typeofjob,jb.MainLink,jb.pdflink,jb.lastdateoffee,jb.status,jb.imagelink,
		jb.State,jb.main_intro,tp.post_id,tp.post_name,tp.Total_Vacancy,tp.Grade_Pay,tp.Age_Limit,tp.Qualification,
		tp.Experience,tp.Duties,tp.Howtoapply        
		FROM jobdetail jb 
		INNER JOIN tbl_post tp ON jb.postid=tp.post_id
		INNER JOIN tbl_boardname tbn  ON jb.boardid=tbn.id 
		INNER JOIN tbl_state tbs  ON jb.State=tbs.id";

		
// if(isset($_POST["search"]["value"]))
// {
//  $query .= '
//  WHERE bname LIKE "%'.$_POST["search"]["value"].'%" 
//  OR Eligibility LIKE "%'.$_POST["search"]["value"].'%" 
//  ';
// }

// if(isset($_POST["order"]))
// {
//  $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
//  ';
// }
// else
// {
//  $query .= 'ORDER BY id asc ';
// }

$queryy1 = '';

// if($_POST["length"] != -1)
// {
//  $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
// }

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $queryy));

$resul = mysqli_query($connect, $queryy);

$data = array();

while($row = mysqli_fetch_array($resul))
{
 $sub_array = array();
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="bname">' . $row["bname"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="Eligibility">' . $row["Eligibility"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="JobLocation">' . $row["JobLocation"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="jobdateadded">' . $row["jobdateadded"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="joblastdate">' . $row["joblastdate"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="tags">' . $row["tags"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="typeofjob">' . $row["typeofjob"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="MainLink">' . $row["MainLink"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="pdflink">' . $row["pdflink"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="lastdateoffee">' . $row["lastdateoffee"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="status">' . $row["status"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="imagelink">' . $row["imagelink"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="statename">' . $row["statename"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="main_intro">' . $row["main_intro"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["post_id"].'" data-column="post_name">' . $row["post_name"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["post_id"].'" data-column="Total_Vacancy">' . $row["Total_Vacancy"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["post_id"].'" data-column="Grade_Pay">' . $row["Grade_Pay"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["post_id"].'" data-column="Age_Limit">' . $row["Age_Limit"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["post_id"].'" data-column="Qualification">' . $row["Qualification"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["post_id"].'" data-column="Experience">' . $row["Experience"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["post_id"].'" data-column="Duties">' . $row["Duties"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["post_id"].'" data-column="Howtoapply">' . $row["Howtoapply"] . '</div>';

 $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["id"].'">Delete</button>';
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM jobdetail";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>
