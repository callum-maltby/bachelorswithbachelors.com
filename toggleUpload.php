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

	$link = mysqli_connect("localhost", "bache895_callum", "sTart98wow$", "bache895_bachelorswithbachelors");

	// Check connection
	if($link === false) {
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}

	// Attempt insert query execution
	//$sql = "INSERT INTO flags (parameter, value) VALUES ('uploadState', 1)";
	//$sql = "SELECT 'value' FROM flags WHERE parameter='uploadState'";
	$sql = "SELECT parameter, value FROM flags WHERE parameter='uploadState'";
	$result = mysqli_query($link, $sql);
	$row = $result->fetch_object();
	$flag_val = $row->value;
	echo $flag_val;
	
	//"UPDATE flags SET value WHERE age=0";
	//mysqli_query($link, $sql);
	echo "now not it";
	echo !$flag_val;
	$new_flag_val = intval(!$flag_val);
	
	$sql = "UPDATE flags SET value = $new_flag_val WHERE parameter='uploadState'";
	if(!mysqli_query($link, $sql)){
		echo "ERROR: Not able to execute $sql. " . mysqli_error($link);
	} else {
		echo "Upload successful";
	}
	
	// close connection
	mysqli_close($link);


header('Location: /');

?>