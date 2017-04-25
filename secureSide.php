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


<?php
//$link = mysqli_connect("localhost", "bachelo1_callum", "callum3141", "bachelo1_bachelorswithbachelors");
$link = mysqli_connect("localhost", "root", "", "bachelo1_bachelorswithbachelors");
 
// Check connection
if($link === false){
    echo("ERROR: Could not connect. " . mysqli_connect_error());
}

?>

<form method="POST" action="removeBlanks.php">
	<input type="button" name="nw_update" value="NW_Update"/>
</form>
					
<?php

if($result = $link->query("SELECT name,age,degree,location,mobileNumber,email,bio,image FROM bachelors ")){
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
					<div id="detailsDiv" style="display:none;">
						<p> Email: <?php echo $row->email; ?></p>
						<p> Mobile Number: <?php echo $row->mobileNumber; ?></p>
					</div>
					
					<div id = "buttons" align="center">
						<button class="btn btn-3 btn-left" onclick="hideButtons();">Swipe Left</button>
						<button class="btn btn-3 btn-right" onclick="showDetails('detailsDiv');">Swipe Right</button>
					</div>
					
					
					
					<!--
					<div>
						<div width=40%, align="center">
							
						</div>
						<div width=40%, align="center">
							
						</div>
					</div
					-->
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

 