
<?php
if (isset($_GET["edit"])) {
    $id = (int) $_GET["edit"];
    $orig = (int) $_GET["edit"];
    setcookie("name", $orig, time()+3600, "/","", 0); ;
    $getfile = file_get_contents('dataa.json');
    $jsonfile = json_decode($getfile, true);
    // $jsonfile = $jsonfile["jobdata"];
    $k=0;
    foreach ($jsonfile as $key => $val) {
        foreach($val as $_key => $val){
        if($val===$id){
            $id=$key;
        break;
        }
    break;
    }
    }
    
    $jsonfile = $jsonfile[$id];
}

if (isset($_POST["id"])) {
    $id = (int) $_POST["id"];
    $getfile = file_get_contents('dataa.json');
    $all = json_decode($getfile, true);
    // $jsonfile = $all["jobdata"];
    $jsonfile = $all[$id];
    $post["id"] = $_COOKIE["name"];
    $post["CompanyName"] = isset($_POST["CompanyName"]) ? $_POST["CompanyName"] : "";
    $post["JobTitle"] = isset($_POST["JobTitle"]) ? $_POST["JobTitle"] : "";
    $post["Eligibility"] = isset($_POST["Eligibility"]) ? $_POST["Eligibility"] : "";
    $post["JobLocation"] = isset($_POST["JobLocation"]) ? $_POST["JobLocation"] : "";
    $post["TotalVacancies"] = isset($_POST["TotalVacancies"]) ? $_POST["TotalVacancies"] : "";
    $post["jobdateadded"] = isset($_POST["jobdateadded"]) ? $_POST["jobdateadded"] : "";
    $post["joblastdate"] = isset($_POST["joblastdate"]) ? $_POST["joblastdate"] : "";
    // $post["xyz"]         =  array(
    // "post_name1" => ucwords(strtolower($_POST['jobpostname1'])),
    // "num_posts1" => ucwords(strtolower($_POST['numberofpost2'])),
    // "post_name2" => ucwords(strtolower($_POST['jobpostname3'])),
    // "num_posts2" => ucwords(strtolower($_POST['numberofpost4'])),
    // "post_name3" => ucwords(strtolower($_POST['jobpostname5'])),
    // "num_posts3" => ucwords(strtolower($_POST['numberofpost6'])),
    // "post_name4" => ucwords(strtolower($_POST['jobpostname7'])),
    // "num_posts4" => ucwords(strtolower($_POST['numberofpost8'])),
    // "post_name5" => ucwords(strtolower($_POST['jobpostname9'])),
    // "num_posts5" => ucwords(strtolower($_POST['numberofpost10'])),
    // "post_name6" => ucwords(strtolower($_POST['jobpostname11'])),
    // "num_posts6" => ucwords(strtolower($_POST['numberofpost12'])),
    // "post_name7" => ucwords(strtolower($_POST['jobpostname13'])),
    // "num_posts7" => ucwords(strtolower($_POST['numberofpost14'])),
    // "post_name8" => ucwords(strtolower($_POST['jobpostname15'])),
    // "num_posts8" => ucwords(strtolower($_POST['numberofpost16'])),
    // "post_name9" => ucwords(strtolower($_POST['jobpostname17'])),
    // "num_posts9" => ucwords(strtolower($_POST['numberofpost18'])),
    // "post_name10" => ucwords(strtolower($_POST['jobpostname19'])),
    // "num_posts10" => ucwords(strtolower($_POST['numberofpost20'])),
    // "post_name10" => ucwords(strtolower($_POST['jobpostname21'])),
    // "num_posts11" => ucwords(strtolower($_POST['numberofpost22'])),
    // "post_name11" => ucwords(strtolower($_POST['jobpostname23'])),
    // "num_posts12" => ucwords(strtolower($_POST['numberofpost24'])),
    // "post_name13" => ucwords(strtolower($_POST['jobpostname25'])),
    // "num_posts13" => ucwords(strtolower($_POST['numberofpost26'])),
    // "post_name14" => ucwords(strtolower($_POST['jobpostname27'])),
    // "num_posts14" => ucwords(strtolower($_POST['numberofpost28'])),
    // "post_name15" => ucwords(strtolower($_POST['jobpostname29'])),
    // "num_posts15" => ucwords(strtolower($_POST['numberofpost30'])),
    // "post_name16" => ucwords(strtolower($_POST['jobpostname31'])),
    // "num_posts16" => ucwords(strtolower($_POST['numberofpost32'])),
    // "post_name17" => ucwords(strtolower($_POST['jobpostname33'])),
    // "num_posts17" => ucwords(strtolower($_POST['numberofpost34'])),
    // "post_name18" => ucwords(strtolower($_POST['jobpostname35'])),
    // "num_posts18" => ucwords(strtolower($_POST['numberofpost36'])),
    // "post_name19" => ucwords(strtolower($_POST['jobpostname37'])),
    // "num_posts19" => ucwords(strtolower($_POST['numberofpost38'])),
    // "post_name20" => ucwords(strtolower($_POST['jobpostname39'])),
    // "num_posts20" => ucwords(strtolower($_POST['numberofpost40'])),
    // "post_name21" => ucwords(strtolower($_POST['jobpostname41'])),
    // "num_posts21" => ucwords(strtolower($_POST['numberofpost42'])),
    // "post_name22" => ucwords(strtolower($_POST['jobpostname43'])),
    // "num_posts22" => ucwords(strtolower($_POST['numberofpost44'])),
    // "post_name23" => ucwords(strtolower($_POST['jobpostname45'])),
    // "num_posts23" => ucwords(strtolower($_POST['numberofpost46'])),
    // "post_name24" => ucwords(strtolower($_POST['jobpostname47'])),
    // "num_posts24" => ucwords(strtolower($_POST['numberofpost48'])),
    // "post_name25" => ucwords(strtolower($_POST['jobpostname49'])),
    // "num_posts25" => ucwords(strtolower($_POST['numberofpost50']))
    
    // );
    $post["educationqualification"] = isset($_POST["educationqualification"]) ? $_POST["educationqualification"] : "";
    $post["tags"] = isset($_POST["tags"]) ? $_POST["tags"] : "";
    $post["typeofjob"] = isset($_POST["typeofjob"]) ? $_POST["typeofjob"] : "";
    $post["MainLink"] = isset($_POST["MainLink"]) ? $_POST["MainLink"] : "";
    $post["pdflink"] = isset($_POST["pdflink"]) ? $_POST["pdflink"] : "";
    $post["Pay"] = isset($_POST["Pay"]) ? $_POST["Pay"] : "";
    $post["lastdateoffee"] = isset($_POST["lastdateoffee"]) ? $_POST["lastdateoffee"] : "";
    $post["State"] = isset($_POST["State"]) ? $_POST["State"] : "";
    $post["howtoapply"] = isset($_POST["howtoapply"]) ? $_POST["howtoapply"] : "";
    $post["imagelink"] = isset($_POST["imagelink"]) ? $_POST["imagelink"] : "";
    $post["main_intro"] = isset($_POST["main_intro"]) ? $_POST["main_intro"] : "";
    if ($jsonfile) {
        // unset($all[$id]);
        $all[$id] = $post;
        
        // $all[$id] = array_values($all[$id]);
        // $all = arsort($all);
        file_put_contents("dataa.json", json_encode($all));
    }
    header("Location: ./index.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
    <link href="dist/bootstrap-table.min.css" rel="stylesheet"/>
    <link href="dist/extentions/filter-control/bootstrap-table-filter-control.min.css" rel="stylesheet"/>
    

    <title>Hello, world!</title>
  <style>
    @media (min-width: 576px){
.form-inline label {
    
  justify-content: end!important;
  margin-bottom:10!important;
}}
    </style>
  </head>
  <body>
<?php if (isset($_GET["edit"])): ?>
    <form action="./edit.php" class="form-inline" method="POST">
      <input type="hidden" value="<?php echo $id ?>" name="id"/>
     <div class="container">
         <div class="row"><div class="col-sm-6 col-md-6 col-xs-6">
         <label for="CompanyName"><b>Company Name</b></label>
        <input class="form-control input-lg" type="text" value="<?php echo $jsonfile["CompanyName"] ?>" name="CompanyName"/></div>
        <div class="col-sm-6 col-md-6 col-xs-6">
        <label for="JobTitle"><b>Job Title</b></label>
        <input type="text" value="<?php echo $jsonfile["JobTitle"] ?>" name="JobTitle"/></div>
        <button id="add">Add</button>
        </div>
        <div class="row"><div class="col-sm-6 col-md-6 col-xs-6">
        <label for="Eligibility"><b>Eligibility</b></label>
        <input type="text" value="<?php echo $jsonfile["Eligibility"] ?>" name="Eligibility"/></div>
        <div class="col-sm-6 col-md-6 col-xs-6">
        <label for="JobLocation"><b>Job Location</b></label>
        <input type="text" value="<?php echo $jsonfile["JobLocation"] ?>" name="JobLocation"/></div></div>
        <div class="row"><div class="col-sm-6 col-md-6 col-xs-6">
        <label for="TotalVacancies"><b>TotalVacancies</b></label>
     <input type="text" value="<?php echo $jsonfile["TotalVacancies"] ?>" name="TotalVacancies"/></div>
     <div class="col-sm-6 col-md-6 col-xs-6">
     <label for="jobdateadded"><b>jobdateadded</b></label>
        <input type="text" value="<?php echo $jsonfile["jobdateadded"] ?>" name="jobdateadded"/></div></div>
        <div class="row"><div class="col-sm-6 col-md-6 col-xs-6">
        <label for="joblastdate"><b>joblastdate</b></label>
        <input type="text" value="<?php echo $jsonfile["joblastdate"] ?>" name="joblastdate"/></div>
       
        <div class="col-sm-6 col-md-6 col-xs-6">
        <label for="educationqualification"><b>educationqualification</b></label>
        <input type="text" value="<?php echo $jsonfile["educationqualification"] ?>" name="educationqualification"/></div></div>
        <div class="row"><div class="col-sm-6 col-md-6 col-xs-6">
        <label for="tags"><b>tags</b></label>
        <input type="text" value="<?php echo $jsonfile["tags"] ?>" name="tags"/></div>
       <div class="col-sm-6 col-md-6 col-xs-6">
       <label for="typeofjob"><b>typeofjob</b></label>
        <input type="text" value="<?php echo $jsonfile["typeofjob"] ?>" name="typeofjob"/></div></div>
        <div class="row"><div class="col-sm-6 col-md-6 col-xs-6">
        <label for="MainLink"><b>MainLink</b></label>
        <input type="text" value="<?php echo $jsonfile["MainLink"] ?>" name="MainLink"/></div>
        <div class="col-sm-6 col-md-6 col-xs-6">
        <label for="pdflink"><b>pdflink</b></label>
        <input type="text" value="<?php echo $jsonfile["pdflink"] ?>" name="pdflink"/></div></div>
        <div class="row"><div class="col-sm-6 col-md-6 col-xs-6">
        <label for="Pay"><b>Pay</b></label>
        <input type="text" value="<?php echo $jsonfile["Pay"] ?>" name="Pay"/></div>
        <div class="col-sm-6 col-md-6 col-xs-6">
        <label for="lastdateoffee"><b>lastdateoffee</b></label>
        <input type="text" value="<?php echo $jsonfile["lastdateoffee"] ?>" name="lastdateoffee"/></div></div>
        <div class="row"><div class="col-sm-6 col-md-6 col-xs-6">
        <label for="State"><b>State</b></label>
        <input type="text" value="<?php echo $jsonfile["State"] ?>" name="State"/></div>
        <div class="col-sm-6 col-md-6 col-xs-6">
        <label for="howtoapply"><b>How to Apply</b></label>
        <input type="text" value="<?php echo $jsonfile["howtoapply"] ?>" name="howtoapply"/></div>
        </div>
        <div class="row"><div class="col-sm-6 col-md-6 col-xs-6">
        <label for="imagelink"><b>Image Link</b></label>
        <input type="text" value="<?php echo $jsonfile["imagelink"] ?>" name="imagelink"/></div>
        <div class="col-sm-6 col-md-6 col-xs-6">
        <label for="main_intro"><b>Main Intro</b></label>
        <input type="text" value="<?php echo $jsonfile["main_intro"] ?>" name="main_intro"/></div>
        </div>
        <div class="row"><div class="col-sm-12 col-md-12 col-xs-12">
        <input type="submit" method="post"/></div></div>
   </div>
    </form>
<?php endif; ?>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.js"></script>
    <script src="dist/extensions/toolbar/bootstrap-table-toolbar.min.js"></script>
    <script src="dist/extensions/filter-control/bootstrap-table-filter-control.min.js"></script>
<script>
    $(function() {
    var nm = 0;
    $('#add').on('click', function( e ) {
        if(nm%2==0){
        e.preventDefault();
        $('<div/>').addClass( 'new-text-div' )
        .html( $('<input type="textbox" name='+ 'jobpostname' + ++nm + ' placeholder="Add Post Name"/>').addClass( 'someclass' ) )
        .append( $('<button/>').addClass( 'remove' ).text( 'Remove' ) )
        .insertBefore( this );
    }
    else{
      e.preventDefault();
        $('<div/>').addClass( 'new-text-div' )
        .html( $('<input type="textbox" name='+ 'numberofpost' + ++nm + ' placeholder="Number of Posts"/>').addClass( 'someclass' ) )
        .append( $('<button/>').addClass( 'remove' ).text( 'Remove' ) )
        .insertBefore( this ); 
    }
    });
    $(document).on('click', 'button.remove', function( e ) {
        e.preventDefault();
        $(this).closest( 'div.new-text-div' ).remove();
    });
});
</script>  
</body>
</html>