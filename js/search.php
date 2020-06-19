<?php $tr=array("-","_","/"," ",",","&","(",")");$j=0;$k=0;session_start();
    $items = array();
    $boarddeptitems = array();
 ?>
<?php
include_once "dbc.php";
if(isset($_GET['q']))
{
$q=$_GET['q'];
$q=mysqli_real_escape_string($conn,$q);
$q=htmlentities($q);
// $sql="SELECT jb.id,bd.id bdid,bd.tags bdtags,jb.tags tjobdetail,jb.boardid,bd.boardid,jb.imagelink,jb.main_intro,bd.deptname,bd.posts,bd.salary,bd.qualification,bd.jobrole,bd.agelimit,jb.Eligibility,
// jb.JobLocation,jb.jobdateadded,jb.joblastdate,bd.tags,jb.typeofjob,jb.MainLink,jb.pdflink,jb.lastdateoffee,jb.status,jb.imagelink,jb.State,jb.main_intro,
// bd.deptpostname  FROM jobdetail jb right JOIN tbl_boarddept bd  on jb.boardid=bd.boardid
// WHERE jb.tags ='%q%' or jb.tags like '%q%' or jb.tags like '%$q' or jb.tags like '$q%' or jb.tags like '%$q%' or 
// bd.tags ='$q' or bd.tags like '%q%' or bd.tags like '%$q' or bd.tags like '$q%' or bd.tags like '%$q%' 
// group by bd.id;";
$sqljobdetail = "select tp.post_name,jd.Eligibility,jd.id jdid,jd.locallink jdl from jobdetail jd inner join tbl_post tp on jd.postid=tp.post_id where tags ='%q%' or tags like '%q%' or tags like '%$q' or tags like '$q%' or tags like '%$q%'";
$sqlboarddept = "select tbd.id,tbd.deptpostname post_name,tbd.locallink from tbl_boarddept tbd inner join jobdetail jd on tbd.boardid=jd.boardid 
inner join tbl_post tp on jd.postid=tp.post_id 
where tbd.tags ='%bank%' or tbd.tags like '%q%' or tbd.tags like '%$q' or tbd.tags like '$q%' or tbd.tags like '%$q%'";
$resjobdetail=mysqli_query($conn,$sqljobdetail);
$resboarddept=mysqli_query($conn,$sqlboarddept);
if(mysqli_num_rows($resjobdetail)>0)
{
    ?>
  
    <ul class="collection row">
    <?php
while($x=mysqli_fetch_assoc($resjobdetail))
{
?>
<li class="collection-item col l12">
<!-- You can add here link to post -->
<?php  if($x['Eligibility']!=-1){?>
<a id=<?php echo $x['jdid']?> href="<?php echo $x['jdl']?>/<?php echo str_replace($tr,"",$x['post_name']);$items[$j] = array('post_name' => str_replace($tr,"",$x['post_name']),'id' => $x['jdid']);$j++;?>" class="btn btn-primary idex" target="_blank"><?php echo $x['post_name'];?></a>
<?php } else { ?>
    <a id=<?php echo $x['id']?> href="<?php echo $x['locallink']?>" class="btn btn-primary idex" target="_blank"><?php echo $x['tags'];?></a>
    <hr>
    <?php } ?> 
<!-- Add here more field like author photo, views, comments -->

</li>
<?php
}
?>
</ul>
<?php
}
else
{
    // echo "<p class='black-text'>Sorry, No data found</p>";
}

if(mysqli_num_rows($resboarddept)>0)
{
    ?>
    <ul class="collection row">
    <?php
while($x=mysqli_fetch_assoc($resboarddept))
{
?>
<li class="collection-item col l12">
<!-- You can add here link to post -->
<?php $i=0;$_SESSION["searchh"]=array(); {?>
<a id=<?php echo $x['id']?> href="<?php echo $x['locallink']?>/<?php echo str_replace($tr,"",$x['post_name']);$boarddeptitems[$k] = array('post_name' => str_replace($tr,"",$x['post_name']),'id' => $x['id']);$k++;?>" class="btn btn-primary idex" target="_blank"><?php echo $x['post_name'];?></a>
<hr>
<?php } ?> 

</li>
<?php
}
?>
</ul>
<?php
}
else
{
    // echo "<p class='black-text'>Sorry, No data found</p>";
}
}


else
{
    echo "<p class='black-text'>Bad Request</p>";
}
?>
<?php 
    $_SESSION["boarddeptsearch"]=$boarddeptitems;
    $_SESSION["newsearch"]=$items;
?>
