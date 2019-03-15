<!DOCTYPE html>
<html>
<head>
	<title></title>
</head> 
<body> 
	<?php
		// Create connection  (server, user, pass, db)
		$con=mysqli_connect("localhost","mpc","lol","SHOP");
		// Check connection
		if (mysqli_connect_errno($con)) {
			echo "Failed to connect to MySQL: ".mysqli_connect_error();
		}
		else {
			echo "<p>OK: Connected to database.</p>";
		}
		// Operate over database
		// ...............Do something....................
		mysqli_query($con,"SELECT * FROM ARTICLE JOIN CATEGORY ON ARTICLE.CATEGORYCODE=CATEGORY.NAME WHERE CATEGORY.NAME=".$_REQUEST['t1']) or die("Query error: ".mysqli_error($con));
		// ..................Finish.......................
		mysqli_close($con); 
	?>
</body>
</html>