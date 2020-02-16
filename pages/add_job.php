<?php include '../include/header.php' ?>
<?php include '../include/navigation.php' ?>
<?php include "../php/component.php" ?>
<?php include "../php/operation.php" ?>
  <style>
    @media (min-width: 576px){
.form-inline label {
    
  justify-content: end!important;
  margin-bottom:10!important;
}}
.row.test {
    
    margin-left: -110px;
    margin-top: 20px;
}
    </style>
 
<div class="container">
<div class="row test">
  <div class="col-2">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Add_Job</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="true">Add_mainjob_data</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Gallery</a>
      <a class="nav-link" id="v-pills-view-tab" data-toggle="pill" href="#v-pills-view" role="tab" aria-controls="v-pills-view" aria-selected="false">View Details</a>     
    </div>
  </div>
 
  <div class="col-10 ">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
 
   
      <main>
    <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Book Store</h1>

        <div class="d-flex justify-content-center">
            <form action="" method="post" class="w-50">
                <div class="pt-2">
                    <?php inputElement("<i class='fas fa-id-badge'></i>","ID", "book_id",setID()); ?>
                </div>
                <div class="pt-2">
                    <?php inputElement("<i class='fas fa-book'></i>","Book Name", "book_name",""); ?>
                </div>
                <div class="row pt-2">
                    <div class="col">
                        <?php inputElement("<i class='fas fa-people-carry'></i>","Publisher", "book_publisher",""); ?>
                    </div>
                    <div class="col">
                        <?php inputElement("<i class='fas fa-dollar-sign'></i>","Price", "book_price",""); ?>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                        <?php buttonElement("btn-create","btn btn-success","<i class='fas fa-plus'></i>","create","data-toggle='tooltip' data-placement='bottom' title='Create'"); ?>
                        <?php buttonElement("btn-read","btn btn-primary","<i class='fas fa-sync'></i>","read","data-toggle='tooltip' data-placement='bottom' title='Read'"); ?>
                        <?php buttonElement("btn-update","btn btn-light border","<i class='fas fa-pen-alt'></i>","update","data-toggle='tooltip' data-placement='bottom' title='Update'"); ?>
                        <?php buttonElement("btn-delete","btn btn-danger","<i class='fas fa-trash-alt'></i>","delete","data-toggle='tooltip' data-placement='bottom' title='Delete'"); ?>
                        <?php deleteBtn();?>
                </div>
            </form>
        </div>

        <!-- Bootstrap table  -->
        <div class="d-flex table-data">
            <table class="table table-striped table-dark">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Book Name</th>
                        <th>Publisher</th>
                        <th>Book Price</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                   <?php


                   if(isset($_POST['read'])){
                       $result = getData();

                       if($result){

                           while ($row = mysqli_fetch_assoc($result)){ ?>

                               <tr>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['book_name']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo $row['book_publisher']; ?></td>
                                   <td data-id="<?php echo $row['id']; ?>"><?php echo '$' . $row['book_price']; ?></td>
                                   <td ><i class="fas fa-edit btnedit" data-id="<?php echo $row['id']; ?>"></i></td>
                               </tr>

                   <?php
                           }

                       }
                   }


                   ?>
                </tbody>
            </table>
        </div>


    </div>
</main></div>




      <!-- profile -->
      <!-- new tab -->
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
      <form class="form-inline" id="myForm" method="post" action="add_mainpage.php" multipart="" enctype="multipart/form-data">
  <div class="card card-body">
  
  
  <div class="row">
  <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
  <label for="qualificationdetails">Qualification Details</label>
  <input type="text" name="qualificationdetails">

  </div>
  <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
  <label for="agelimit">Age Limit:</label>
  <input type="text" name="agelimit">
  <!-- <button id="add">Add</button> -->
  </div></div> 
<br>
<div class="row">
<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
  <label for="address">Address</label>
  <input type="text" name="address">
  </div>
<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
  <label for="applicationprocedure">Application Procedure</label>
  <input type="text" name="applicationprocedure">
  
</div>
</div> <br>
<div class="row">
<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
<label for="selectionprocedure">Selection Procedure</label>
  <input type="text" name="selectionprocedure">
  </div>
<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
  <label for="importantinstruction">Important Instruction</label>
  <input type="text" name="importantinstruction">
  </div>
</div> 

<br>
<div class="row">
<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
  <label for="generalcondition">General Condition</label>
  <input type="text" name="generalcondition">
  
</div>
<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
  <label for="tags">tags</label>
  <input type="text" name="tags"></div></div> <br>


<!-- <div class="row">
<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
  <label for="lastdateoffee">lastdateoffee</label>
  <input type="date" type="text" name="lastdateoffee">
  
</div>
<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
  <label for="status">status</label>
  <input type="text" name="status">
  
</div>

</div>  -->
<!-- <div class="row">
<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
  <label for="totalvacancies">totalvacancies</label>
  <input type="text" name="totalvacancies">
  </div>
  <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
  <label for="imagelink">ImageLink</label>
  <input type="text" name="imagelink">
</div>
</div><br> -->
<!-- <div class="row">
<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
  <label for="state">State</label>
  <input type="text" name="state">
  </div>
  <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
  <label for="howtoapply">How to Apply</label>
  <input type="text" name="howtoapply">
</div>
</div><br> -->
<div class="row"><div class="col-sm-12">
  <input type="submit" name="submit" value="Submit" class="btn btn-info" onclick="submit()" /></div></div>
  
</div>
</form></div>
      
<!-- gallery -->
<!-- new tab -->
<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"> <div class="row">
  <form method="post" action="" multipart="" enctype="multipart/form-data">  
   
    <br />  
    <label>Name</label>  
    <input type="text" name="name" class="form-control" /><br />  
  
    <input type="file" id="image" name="img[]" multiple/>
    <input type="submit" name="submit" value="Submit" class="btn btn-info" onclick="submit()" /><br />                      
  
</form> 
</div>
</div>

      <!-- new tab -->
      <div class="tab-pane fade" id="v-pills-view" role="tabpanel" aria-labelledby="v-pills-settings-tab">
<!-- details -->

<div class="container">
	<div class="row">
	<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Problem</th>
      <th scope="col">Name</th>
      <th scope="col">Number</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>

  <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  
  </tbody>
</table>
	</div>
</div>
<!-- details -->
      </div>
    </div>
  </div>
</div>
</div>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.js"></script>
    <script src="dist/extensions/toolbar/bootstrap-table-toolbar.min.js"></script>
    <script src="dist/extensions/filter-control/bootstrap-table-filter-control.min.js"></script> -->


     

