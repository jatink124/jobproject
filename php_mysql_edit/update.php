<?php include '../include/connectionstring.php'?>
<?php
// $connect = mysqli_connect("localhost", "root", "", "findsarkarijob");
if(isset($_POST["id"]))
{
    {
        $value = mysqli_real_escape_string($connect, $_POST["value"]);
       if($_POST["column_name"] == "post_name" | $_POST["column_name"]=="Total_Vacancy" | $_POST["column_name"]=="Grade_Pay" | $_POST["column_name"]=="Age_Limit"
       | $_POST["column_name"]=="Qualification" | $_POST["column_name"]=="Experience" | $_POST["column_name"]=="Duties" | $_POST["column_name"]=="Howtoapply"){
        $query = "UPDATE tbl_post SET ".$_POST["column_name"]."='".$value."' WHERE post_id = '".$_POST["id"]."'";
        if(mysqli_query($connect, $query))
        {
         echo 'Data Updated';
        }
       }
    else{
        $query = "UPDATE jobdetail SET ".$_POST["column_name"]."='".$value."' WHERE id = '".$_POST["id"]."'";
        if(mysqli_query($connect, $query))
        {
         echo 'Data Updated';
        }
    }
    }
}
?>
