<?php
require 'connect.php';
if(isset($_POST['buttomImport'])) {
    // copy($_FILES['jsonFile']['tmp_name'], 'jsonFiles/'.$_FILES['jsonFile']['name']);
    $data = file_get_contents('dataa.json');
    $products = json_decode($data);
    foreach ($products as $product) {
        $stmt = $conn->prepare('insert into jobdetail(CompanyName,JobTitle,Eligibility,JobLocation,
        TotalVacancies,jobdateadded,joblastdate,educationqualification,tags,typeofjob,MainLink,pdflink,
        Pay,lastdateoffee,status,imagelink,State,howtoapply,main_intro
        ) values(:CompanyName, :JobTitle, :Eligibility, :JobLocation, :TotalVacancies, :jobdateadded, :joblastdate,
       :educationqualification,:tags,:typeofjob,:MainLink,:pdflink,:Pay,:lastdateoffee,:status,:imagelink,
       :State,:howtoapply,:main_intro)');
        $stmt->bindValue('CompanyName', $product->CompanyName);
        $stmt->bindValue('JobTitle', $product->JobTitle);
        $stmt->bindValue('Eligibility', $product->Eligibility);
        $stmt->bindValue('JobLocation', $product->JobLocation);
        $stmt->bindValue('TotalVacancies', $product->TotalVacancies);
        $stmt->bindValue('jobdateadded', $product->jobdateadded);
        $stmt->bindValue('joblastdate', $product->joblastdate);
        $stmt->bindValue('educationqualification', $product->educationqualification);
        $stmt->bindValue('tags', $product->tags);
        $stmt->bindValue('typeofjob', $product->typeofjob);
        $stmt->bindValue('MainLink', $product->MainLink);
        $stmt->bindValue('pdflink', $product->pdflink);
        $stmt->bindValue('Pay', $product->Pay);
        $stmt->bindValue('lastdateoffee', $product->lastdateoffee);
        $stmt->bindValue('status', $product->status);
        $stmt->bindValue('imagelink', $product->imagelink);
        $stmt->bindValue('State', $product->State);
        $stmt->bindValue('howtoapply', $product->howtoapply);
        $stmt->bindValue('main_intro', $product->main_intro);
        $stmt->execute();
    }
}
?>
<html>
	<head>
		<title>Import JSON File</title>
	</head>
	<body>
		<form method="post" enctype="multipart/form-data">
			JSON File <input type="file" name="jsonFile">
			<br>
			<input type="submit" value="Import" name="buttomImport">
		</form>
	</body>
</html>