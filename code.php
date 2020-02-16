<!-- tablecode -->
<div class="card" style="width: 50rem;">
  <img class="card-img-top" src="images/<?php echo $imagelink[$previd]?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $mainintro[$previd]?> </h5>
    <hr><?php if($Eligibility[$previd]!=""){?>
    
    <p class="card-text"><h3>Eligibility</h3> <hr><?php echo $Eligibility[$previd];?></p><?php }?>
  </div>
  
  <?php if(in_array($boardid[$previd], $boardid)){?>
  <table class="table">
  <thead>
    <tr>
   <?php foreach($fields as $title => $value){if ($title>2&$title<=8){?>
  <th scope="col"><?php  echo $value; } ?></th> <?php } ?>
     
    </tr>
  </thead>
  <tbody>
   <?php $x=$previd;?>
    <?php  foreach($detboardid as $deptitle => $depvalue){if($depvalue==$detboardid[$previd]){?>
    <tr>
  
      <td><?php echo $departname[$x];  ?></td>
      <td><?php echo $posts[$x];  ?></td>
      <td><?php echo $detsalary[$x]; ?></td>
      <td><?php echo $qualification[$x];  ?></td>
      <td><?php echo $detjobrole[$x];  ?></td>
      <td><?php echo $detagelimit[$x]; $x++; ?></td>
    </tr>
   <?php }} ?>
  </tbody>
</table>
    <?php } ?>
  <div class="card-body">
    <a href="<?php echo $MainLink[$previd] ?>" class="card-link">Main Link</a>
    <a href="<?php echo $pdflink[$previd] ?>" class="card-link">Pdf link</a>
  </div>
</div>
</div>
</div>
<!-- tablecode -->