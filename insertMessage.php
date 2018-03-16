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

	$link = mysqli_connect("localhost", "p7iyrz4kr3t4", "sTart98wow$", "bachelorswithbachelors");

	// Check connection
	if($link === false) {
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	 
	// Escape user inputs for security
	$title = mysqli_real_escape_string($link, $_REQUEST['title']);
	$message = mysqli_real_escape_string($link, $_REQUEST['message']);

		// Attempt insert query execution
	$sql = "INSERT INTO messages (title, message) VALUES ('$title', '$message')";
	//mysqli_query($link, $sql);

	if(!mysqli_query($link, $sql)){
		echo "ERROR: Not able to execute $sql. " . mysqli_error($link);
	} else {
		echo "Upload successful";
	}
	
	// Sort table to show most recent entry first
	$sortQuery = "ALTER TABLE messages ORDER BY dateTimeAdded DESC";
	mysqli_query($link, $sortQuery);

	 
	// close connection
	mysqli_close($link);


header('Location: /');

?>