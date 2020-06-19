<?php include './include/connectionstring.php'?>
<?php
//fetch.php
$sql = "select * from latest_news_tbl";
$latestnewsresult = mysqli_query($connect, $sql);
if (mysqli_num_rows($latestnewsresult ) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($latestnewsresult )) {
     $result[] = $row;
    }
  } else {
    echo "0 results";
  }

?>