<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "bachelo1_callum", "callum3141", "bachelo1_bachelorswithbachelors");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
/*
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
 */
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$age = mysqli_real_escape_string($link, $_REQUEST['age']);
$degree = mysqli_real_escape_string($link, $_REQUEST['degree']);
$location = mysqli_real_escape_string($link, $_REQUEST['location']);
$mobileNumber = mysqli_real_escape_string($link, $_REQUEST['mobileNumber']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$bio = mysqli_real_escape_string($link, $_REQUEST['bio']);

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["imageUpload"]["name"]). " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}

$image=basename( $_FILES["imageUpload"]["name"]); // used to store the filename in a variable


// attempt insert query execution
//$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
$sql = "INSERT INTO bachelors (name, age, degree, location, mobileNumber, email, bio, image) VALUES ('$name', '$age', '$degree', '$location', '$mobileNumber', '$email', '$bio', '$image')";
if(mysqli_query($link, $sql)){
    header('Location: /');
	//echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);

header('Location: http://www.bachelorswithbachelors.com');
//exit;

?>