<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>bachelorswithbachelors.com </title>
		<link rel="stylesheet" type="text/css" href="myStyle.css" />
		
		<script src="js/modernizr.custom.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	</head>
	
	<script type="text/javascript" src="jquery.js"></script>
	
<body>
<div id="menuBackground">
    <div id="menuContainer">
    <!--<label for="show-menu" class="show-menu">Show Menu</label>
    <input type="checkbox" id="show-menu" role="button">-->
            
		<ul id="menu">
			<li><a href="/">Home</a></li>
			<li><a href="becomeBachelor.php">Become a Bachelor</a></li>
			<li><a href="404page.php">Testimonials</a></li>
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
	<!--</input>-->
    </div>
	<div id="clear"></div>
 </div>
 
 
 <!--<div margin-left=20px, align = "center", position="relative"> -->
 <div id="monologueContainer">
	<span style = "vertical-align:middle">
	<!--<h1> Welcome to the future of dating. </h1> -->
	<h2 class="quotes">It's a simple question with a complex answer.</h2>
	<h2 class="quotes">What do we all want? Money? No. Power? No.</h2>
	<h2 class="quotes">Love. We want to be loved.</h2>
	<h2 class="quotes">But in this ever-changing world, love is more elusive than ever.</h2>
	<h2 class="quotes">So, why not use the internet to help? We call this revolutionary idea: 'Internet Dating'.</h2>
	<h2 class="quotes">Upon inspection, we found out that this already existed, so we focused on one particular area: </h2>
	<h2 class="quotes">Helping women find single and intelligent men.</h2>
	<h2 class="quotes">Wouldn't it be great if women could browse through libraries of eligible, tertiary-educated men?</h2>
	<h2 class="quotes">After literally years of idle thought and minutes of half-hearted exertion, such a service finally exists.</h2>
	<h2 class="quotes">We call it:</h2>
	<h1 class="quotes">bachelorswithbachelors.com</h1>
	<h1 class="quotes">Feel free to browse this batch:</h1>
	</span>
</div>

<section class="color-3">
	<button class="btn btn-3 btn-3e">Send data</button>
</section>

<?php
//$link = mysqli_connect("localhost", "bachelo1_callum", "callum3141", "bachelo1_bachelorswithbachelors");
$link = mysqli_connect("localhost", "root", "", "bachelo1_bachelorswithbachelors");
 
// Check connection
if($link === false){
    echo("ERROR: Could not connect. " . mysqli_connect_error());
}

if($result = $link->query("SELECT name,age,degree,location,mobileNumber,bio,image FROM bachelors ")){
    if($count = $result->num_rows){
		while($row = $result->fetch_object()){
?> 

			<div id="bachelorCard">
				<div id="bachelorLeft">
					<!-- echo "<img src='uploads/".$row->image."' />"; -->
					<?php
						echo "<img src='uploads/".$row->image."' / width=100%;height=auto;image-orientation: from-image>";
					?>
					<!--<img src="uploads/"".jpg" alt="handsomeCal" style="width:100%;height:auto;vertical-align:middle;"> -->
				</div>
				<div id="bachelorRight">
					<h2 align="center"> <?php echo $row->name; ?> <br><br> </h2>
					<p> Age: <?php echo $row->age; ?></p>
					<p> University Degree/s: <?php echo $row->degree; ?></p>
					<p> Location: <?php echo $row->location; ?></p>
					<p> Brief Bio: <?php echo $row->bio; ?></p>
					<p>
						<button class="btn btn-3 btn-3d icon-cog">Settings</button>
						<button class="btn btn-3 btn-3e \25B7">Send data</button>
					</p>
				</div>
				<div id="clear"></div>
			</div>

<?php          
		}	
		$result->free();
    }
}
?>


<div id="footer"></div>



 </body>
 </html>

 