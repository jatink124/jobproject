<style>
li.list-group-item.latestnews {
    padding: 0rem 0rem;
    font-family: nyt-cheltenham;
    font-style: normal;
    font-weight: 700;
    font-size: 20px;
    line-height: 23px;
    color: #666666;
    margin-left: -20px;
}

ul.list-group.latestnews {
margin-left:100px;
}
@media (max-width: 768px){
  li.list-group-item.latestnews {
    padding: 0rem 0rem;
    font-family: nyt-cheltenham;
    font-style: normal;
    font-weight: 700;
    font-size: 20px;
    line-height: 23px;
    color: #666666;
    margin-left: -20px;
    width: 350px;
}
@media screen and (min-width: 768px) and (max-width: 1100px){
  li.list-group-item.latestnews {
    padding: 0rem 0rem;
    font-family: nyt-cheltenham;
    font-style: normal;
    font-weight: 700;
    font-size: 20px;
    line-height: 23px;
    color: #666666;
    margin-left: -20px;
    width: 650px;
}
}


</style>
<div class="container">
<div class="row">
<div class="outer"><div class="outertext">Latest News</div>
  <div class="left"></div>
  <div class="right"></div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<ul class="list-group latestnews">
<table class="table latestnews">
<tbody>
<?php
if (! empty($result)) {
foreach ($result as $k => $v) {
        ?>
 <tr><td><i class="fas fa-arrow-circle-right" style="color:green"></i></td>
<td><li class="list-group-item latestnews"><a href="latestnews/<?php echo $result[$k]["id"]?>" target="_blank"><?php echo $result[$k]["news_intro"]; ?></a></li></td>

<?php }

}?>
</tbody>
</table>
</ul>
</div>
</div>
</div>
