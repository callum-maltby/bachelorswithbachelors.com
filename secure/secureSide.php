<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>bachelorswithbachelors.com </title>
		
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" type="text/css" href="/myStyle.css" />
	<script src="js/modernizr.custom.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
</head>
		
<body>

<!-- Menu -->
<div id="menuBackground">
    <div id="menuContainer">
		<ul id="menu">
			<li><a href="/">Home</a></li>
			<li><a href="/becomeBachelor.php">Become a Bachelor</a></li>
			<li><a href="/404page.php">Testimonials</a></li>
			<li><a href="/merchandise.php">Merchandise</a></li>
			<li><a href="/devLog.php">Development Log</a></li> 
        </ul>
    </div>
	<div id="clear"></div>
</div>

<div id="leadingText" style="max-width:400px">
	<h2 class="devLogTitle">Master actions</h2>
	<form class="signupForm" action="/removeAgeZero.php" method="post" enctype="multipart/form-data">
		<ul>
		<input type="submit" value="Hide profiles with age = 0">
		</ul>
	</form>
	<form class="signupForm" action="/toggleUpload.php" method="post" enctype="multipart/form-data">
		<ul>
		<input type="submit" value="Toggle upload status">
		</ul>
	</form>
</div>

<div id="leadingText" style="max-width:400px">
	<h2 class="devLogTitle">Display a homepage message</h2>

	<form class="signupForm" action="/insertMessage.php" method="post" enctype="multipart/form-data">
		<ul>
		<li>
			<label for="title">Title</label>
			<input type="text" name="title" maxlength="100">
			<span>Enter message title</span>
		</li>
		<li>
			<label for="message">Message</label>
			<input type="text" name="message" maxlength="1000">
			<span>Enter your message</span>
		</li>
		<input type="submit" value="Submit">
		</ul>
	</form>

</div>

<div class="row" style="padding-top:20px">
    <div class="col s12 cards-container">
	
<?php

// Check connection
$link = mysqli_connect("localhost", "bache895_callum", "sTart98wow$", "bache895_bachelorswithbachelors");

if ($link == false) {
	echo("ERROR: Could not connect. " . mysqli_connect_error());
}

// Display bachelors
if($result = $link->query("SELECT name,age,degree,location,mobileNumber,email,bio,image,display,dateTimeAdded FROM bachelors ")) {
    if($result->num_rows > 0) {
		while($row = $result->fetch_object()) {
			if ($row->display <= 0) {
				//$result->free();
				continue;
			}
?>
			
		<div id="bachelorCard">
<?php 
			list($width, $height) = getimagesize("../uploads/".$row->image."");
			if ($width > 0.7*$height) { // Picture at top
			echo "<img src='../uploads/".$row->image."' / width=100%;opacity:1;height=auto;image-orientation: from-image>";
?>
			<h2 align="center"> <?php echo $row->name; ?> <br><br> </h2>
			<p> Age: <?php echo $row->age; ?></p>
			<p> University Degree/s: <?php echo $row->degree; ?></p>
			<p> Location: <?php echo $row->location; ?></p>
			<p> Brief Bio: <?php echo $row->bio; ?></p>
			<p> Email: <?php echo $row->email; ?></p>
			<p> Mobile Number: <?php echo $row->mobileNumber; ?></p>
<?php
			} else { // picture on left
?>
			<div id="bachelorLeft">
			<!-- echo "<img src='uploads/".$row->image."' />"; -->
<?php
				echo "<img src='uploads/".$row->image."' / width=100%;height=auto;image-orientation: from-image; border-radius:25px>";
?>
				<!--<img src="uploads/"".jpg" alt="handsomeCal" style="width:100%;height:auto;vertical-align:middle;"> -->
			</div>
			<div id="bachelorRight">
				<h2 align="center"> <?php echo $row->name; ?> <br><br> </h2>
				<p> Age: <?php echo $row->age; ?></p>
				<p> University Degree/s: <?php echo $row->degree; ?></p>
				<p> Location: <?php echo $row->location; ?></p>
				<p> Brief Bio: <?php echo $row->bio; ?></p>
				<p> Email: <?php echo $row->email; ?></p>
				<p> Mobile Number: <?php echo $row->mobileNumber; ?></p>
			</div>
			<!--<div id="clear"></div>-->
<?php
			}
?>
			<form align="right" action="removeCard.php" method="post" enctype="multipart/form-data">
			<input type="submit" value="Remove Card">
			
		</div>

<?php          
		}	
		$result->free();
    } else {
		echo '<div id="leadingText"><h2>No records in database\n</div>';
	}
} else {
	echo '<div id="leadingText"><h2>Unable to access database\n</div>';
}
?>
	</div>
</div>


