<!DOCTYPE html>
<html>
<head>
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="myStyle.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
</head>

<script type="text/javascript" src="jquery.js"></script>

<body>
<div id="menuBackground">
    <div id="menuContainer">
    <label for="show-menu" class="show-menu">Show Menu</label>
    <input type="checkbox" id="show-menu" role="button">
            
		<ul id="menu">
			<li><a href="/">Home</a></li>
			<li><a href="becomeBachelor.php">Become a Bachelor</a></li>
			<li><a href="devLog.php">Development Log</a></li>
			<!--
        <li>
            <a href="#">Portfolio ￬</a>
                <ul class="hidden">
                    <li><a href="#">Photography</a></li>
                    <li><a href="#">Web & User Interface Design</a></li>
                     <li><a href="#">Illustration</a></li>
                </ul>
            </li>
		-->
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

<form class="signupForm" action="insertBachelor.php" method="post" enctype="multipart/form-data">
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
		<span>Upload an image of yourself</span>
	</li>
	<li>
		<input type="submit" value="Submit" >
	</li>
	</ul>
</form>

 </body>
 </html>
