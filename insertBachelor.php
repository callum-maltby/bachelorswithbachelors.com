<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>bachelorswithbachelors.com </title>
		
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" type="text/css" href="myStyle.css" />
	<script src="js/modernizr.custom.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
</head>

<?php
$captcha;
if(isset($_POST['g-recaptcha-response'])){
    $captcha=$_POST['g-recaptcha-response'];
}
if(!$captcha){
    echo '<div id="leadingText"><h2>Please check the the captcha form.</h2></div>';
	exit;
}
$secretKey = "6Ld41ksUAAAAAMCVQRUH6zXvMgt1OwSSq8OhRH9-";
$ip = $_SERVER['REMOTE_ADDR'];
$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
$responseKeys = json_decode($response,true);

if(intval($responseKeys["success"]) !== 1) {
    echo '<div id="leadingText"><h2>Spammers are not especially welcome sorry</h2></div>';
} else {
	// Action taken on successful captcha challenge
	$link = mysqli_connect("localhost", "p7iyrz4kr3t4", "sTart98wow$", "bachelorswithbachelors");

	// Check connection
	if($link === false) {
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	 
	// Escape user inputs for security
	$name = mysqli_real_escape_string($link, $_REQUEST['name']);
	$age = mysqli_real_escape_string($link, $_REQUEST['age']);
	$degree = mysqli_real_escape_string($link, $_REQUEST['degree']);
	$location = mysqli_real_escape_string($link, $_REQUEST['location']);
	$mobileNumber = mysqli_real_escape_string($link, $_REQUEST['mobileNumber']);
	$email = mysqli_real_escape_string($link, $_REQUEST['email']);
	$bio = mysqli_real_escape_string($link, $_REQUEST['bio']);
	$display = 1; 
	
	if ( basename($_FILES["imageUpload"]["name"]) == "") { // if no image uploaded
		$display = 0;
	} else if (preg_match('/\.(jpe?g|png|gif)$/i', $_FILES["imageUpload"]["name"], $matches)) {
		// great success. Make this check MIME type
	} else {
		header('Location: hackerRejection.php');
		exit;
	}
	
	// Timestamp image name
	$target_dir = "uploads/";
	$image = date('d-m-Y_H-i-s') . basename( $_FILES["imageUpload"]["name"]); // concatenate timestamp onto original image name
	$target_file = $target_dir . $image;//date('d-m-Y_H-i-s') . basename($_FILES["imageUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)) {
		//echo "The file ". basename( $_FILES["imageUpload"]["name"]). " has been uploaded.";
	} else {
		echo "Sorry, there was an error uploading your file.";
	}

	

	// Attempt insert query execution
	$sql = "INSERT INTO bachelors (name, age, degree, location, mobileNumber, email, bio, display, image) VALUES ('$name', '$age', '$degree', '$location', '$mobileNumber', '$email', '$bio', '$display', '$image')";
	//mysqli_query($link, $sql);

	if(!mysqli_query($link, $sql)){
		echo "ERROR: Not able to execute $sql. " . mysqli_error($link);
	}
	// Sort table to show most recent entry first
	$sortQuery = "ALTER TABLE bachelors ORDER BY dateTimeAdded DESC";
	mysqli_query($link, $sortQuery);

	 
	// close connection
	mysqli_close($link);
}

header('Location: /');

?>