<?php
$filename = 'tblpost.json';
// if (!file_exists($filename)){ 
function getdata(){
$connect = mysqli_connect("194.59.164.180","u151583556_username_job","sarkaridb","u151583556_sarkarijob");
$query = "select jd.id,tp.post_name from tbl_post tp inner join jobdetail jd on tp.post_id=jd.postid";
$result = mysqli_query($connect,$query);
$data = array();
while($row = mysqli_fetch_array($result)){
$data[] = array(
'id' => $row['id'],
'postname' => $row['post_name']
// ‘Gender => $row[‘gender’];
// ‘Designation’ => $row[‘designation’];
);
}
return json_encode($data);
} 
$file_name = 'tblpost.json';
if(file_put_contents($file_name,getdata())){
// echo $file_name . 'file created';
}
else
{
echo 'There is some error';
}

?>
