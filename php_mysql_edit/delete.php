<?php include '../include/connectionstring.php'?>
<?php
// $connect = mysqli_connect("localhost", "root", "", "findsarkarijob");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM jobdetail WHERE id = '".$_POST["id"]."'";
 $query = "DELETE jobdetail,tbl_post
 FROM jobdetail LEFT JOIN tbl_post ON jobdetail.postid=tbl_post.post_id 
 WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>
