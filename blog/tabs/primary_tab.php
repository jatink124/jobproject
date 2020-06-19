<link rel="stylesheet" type="text/css" href="./styles.css">
<?php
if (isset($_POST["submit"])) {
    include_once 'CrudController.php';
    $crudcontroller = new CrudController();
    $result = $crudcontroller->readData();
    // header("Location: index.php");
}
?>
<?php
include_once './CrudController.php';
$crudcontroller = new CrudController();
$result = $crudcontroller->readData();
?>
<div class="container" style="max-width: 1140px;
    margin: 50px 200px;">
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Add Blog</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Not Availaible</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Not Availaible</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
<?php include './pages/addblog.php' ?> 
</div>
  <!-- first_form -->
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
</div>
</div>
<?php
if (! empty($result)) {
    foreach ($result as $k => $v) {
        ?>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $result[$k]["title"]; ?></h5>
    <p class="card-text"><?php echo $result[$k]["content"]; ?></p>
    <a href="#" class="btn btn-primary"><?php echo $result[$k]["intro"]; ?></a>
  </div>
</div>

<?php
    }
}
?>