<html>

<head>
	<title>JQuery Page Loading Effect</title>
	<link rel="stylesheet" type="text/css" href="sandboxStyle.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
</head>


<script type="text/javascript" src="jquery.js"></script>


<body>

<?php
foreach($img_model->get_all() as $row){
  echo '<img src="uploads/'.$row['image'].'" /><br />';  
}
?>

</body>
</html>