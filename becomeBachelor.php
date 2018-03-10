<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="myStyle.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<script type="text/javascript" src="jquery.js"></script>

<body>
<div id="menuBackground">
    <div id="menuContainer">   
		<ul id="menu">
			<li><a href="/">Home</a></li>
			<li><a href="becomeBachelor.php">Become a Bachelor</a></li>
			<li><a href="404page.php">Testimonials</a></li>
			<li><a href="merchandise.php">Merchandise</a></li>
			<li><a href="devLog.php">Development Log</a></li>
        </ul>
	</input>
    </div>
 </div>

 <div id="leadingText">
	<h1> So you want to be a bachelor! </h1>
	<p> It's actually a pretty simple process:</p><p class="fastQuotes">#1: Go to uni.<p>
	<p class="fastQuotes">#2: Finish uni.<p>
	<p class="fastQuotes">#3: Be single.<p>	
</div>

<div id="devLogContainer" style="background:white;opacity:1;max-width:400px">

<form class="signupForm" action="insertBachelor.php" method="post" enctype="multipart/form-data">
<!--<form class="signupForm" method="post" enctype="multipart/form-data">-->
	
	<ul>
	<li>
		<label for="name">Name</label>
		<input type="text" name="name" maxlength="100">
		<span>Enter your full name</span>
	</li>
	<li>
		<label for="age">Age</label>
		<input type="number" name="age" maxlength="100">
		<span>Enter your age</span>
	</li>
	<li>
		<label for="degree">Degree</label>
		<input type="text" name="degree" maxlength="100">
		<span>Enter your university degree. You've got to hold a bachelor's, otherwise you're out</span>
	</li>
	<li>
		<label for="location">Location</label>
		<input type="text" name="location" maxlength="100">
		<span>Enter your rough location. No latitudes and longitudes please, that'd be creepy</span>
	</li>
	<li>
		<label for="mobileNumber">Mobile Number</label>
		<input type="text" name="mobileNumber" maxlength="100">
		<span>Enter your mobile number</span>
	</li>
	<li>
		<label for="email">Email</label>
		<input type="email" name="email" maxlength="100">
		<span>Enter a valid email address</span>
	</li>
	<li>
		<label for="bio">About You</label>
		<textarea name="bio" onkeyup="adjust_textarea(this)"></textarea>
		<span>Say something about yourself</span>
	</li>
	<li>
		<label for="imageUpload">Image</label>
		<input type="file" name="imageUpload">
		<span>Upload an image of yourself or the profile won't be displayed</span>
	</li>
	<!--<div style="text-align:center">
		<div style="margin-bottom:20px;align:center;display:inline-block;transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:18 0;" class="g-recaptcha" data-sitekey="6Ld41ksUAAAAABZ3GRzD3assUlQA5KgbZ5rB8DD5"></div>
		<input type="submit" value="Submit">
	</div>-->
	<div style="margin-bottom:10px;align:center;display:inline-block;transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:18 0;" class="g-recaptcha" data-sitekey="6Ld41ksUAAAAABZ3GRzD3assUlQA5KgbZ5rB8DD5"></div>
		<input type="submit" value="Submit">
	</ul>
</form>
</div>

 </body>
 </html>
