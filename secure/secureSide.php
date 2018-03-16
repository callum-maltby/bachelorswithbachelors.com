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
 
 
 <!-- Fading elevator-pitch quotes -->
<div id="leadingText">
	<h2 class="devLogTitle">Secure Side</h2>
	<p>More functionality coming soon to a <i>secureSide.php</i> near you</p>
</div>

<div id="devLogContainer" style="background:white;opacity:1;max-width:400px">
<h2 class="devLogTitle">Messages written here are displayed on <i>index.php</i></h2>

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
