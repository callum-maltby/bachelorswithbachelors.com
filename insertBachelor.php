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

//if(intval($responseKeys["success"]) !== 1) { // remove comment once recaptcha fixed
 //   echo '<div id="leadingText"><h2>Spammers are not especially welcome sorry</h2></div>'; // remove comment once recaptcha fixed
//} else { // remove comment once recaptcha fixed
	// Action taken on successful captcha challenge
	$link = mysqli_connect("localhost", "bache895_callum", "sTart98wow$", "bache895_bachelorswithbachelors");

	// Check connection
	if($link === false) {
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	 
	// Escape user inputs for security
	$name_dirty = mysqli_real_escape_string($link, $_REQUEST['name']);
	$age = mysqli_real_escape_string($link, $_REQUEST['age']);
	$degree_dirty = mysqli_real_escape_string($link, $_REQUEST['degree']);
	$location_dirty = mysqli_real_escape_string($link, $_REQUEST['location']);
	$mobileNumber_dirty = mysqli_real_escape_string($link, $_REQUEST['mobileNumber']);
	$email_dirty = mysqli_real_escape_string($link, $_REQUEST['email']);
	$bio_dirty = mysqli_real_escape_string($link, $_REQUEST['bio']);
	$display = 1; 
	
	
	$php_injection_found = 0;
	
	// Look for HTML injection, and redirect if found
	$tags_found = 0;
	$name = strip_tags($name_dirty);
	$tags_found += abs(strcmp($name, $name_dirty));
	$degree = strip_tags($degree_dirty);
	$tags_found += abs(strcmp($degree, $degree_dirty));
	$location = strip_tags($location_dirty);
	$tags_found += abs(strcmp($location, $location_dirty));
	$mobileNumber = strip_tags($mobileNumber_dirty);
	$tags_found += abs(strcmp($mobileNumber, $mobileNumber_dirty));
	$email = strip_tags($email_dirty);
	$tags_found += abs(strcmp($email, $email_dirty));
	$bio = strip_tags($bio_dirty);
	$tags_found += abs(strcmp($bio, $bio_dirty));
	
	if ($tags_found != 0) {
		$display = 0;
		$bio = "html tags found" . $bio;
		$bio_dirty = "html tags found" . $bio_dirty;
	}
	
	if ( basename($_FILES["imageUpload"]["name"]) == "") { // if no image uploaded
		$display = 0;
		$bio = "no image present" . $bio;
		$bio_dirty = "no image present" . $bio_dirty;
	} else if (preg_match('/\.(jpe?g|png|gif)$/i', $_FILES["imageUpload"]["name"], $matches)) {
		// great success. Make this check MIME type
	} else {
		$php_injection_found = 1;
		$display = 0;
		$bio = "php injection found" . $bio;
		$bio_dirty = "php injection found" . $bio_dirty;
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
	if ($tags_found) {
		$sql = "INSERT INTO bachelors (name, age, degree, location, mobileNumber, email, bio, display, image) VALUES ('$name_dirty', '$age', '$degree_dirty', '$location_dirty', '$mobileNumber_dirty', '$email_dirty', '$bio_dirty', '$display', '$image')";
	} else {
		$sql = "INSERT INTO bachelors (name, age, degree, location, mobileNumber, email, bio, display, image) VALUES ('$name', '$age', '$degree', '$location', '$mobileNumber', '$email', '$bio', '$display', '$image')";
	}
	//mysqli_query($link, $sql);

	if(!mysqli_query($link, $sql)){
		echo "ERROR: Not able to execute $sql. " . mysqli_error($link);
	}
	// Sort table to show most recent entry first
	$sortQuery = "ALTER TABLE bachelors ORDER BY dateTimeAdded DESC";
	mysqli_query($link, $sortQuery);

	 
	// close connection
	mysqli_close($link);
//} // remove comment once recaptcha fixed
echo $tags_found;
echo $php_injection_found;

if ($tags_found || $php_injection_found) {
	header('Location: hackerRejection.php');
} else {
	header('Location: /');
}

?>