<?php
	// Create connection  (server, user, pass, db)
	$con=mysqli_connect("localhost","mpc","lol","BASE1");
	// Check connection
	if (mysqli_connect_errno($con)) {
		echo "Failed to connect to MySQL: ".mysqli_connect_error();
	}
	else {
		echo "<p>OK: Connected to database.</p>";
	}
	// Operate over database
	// ...............Do something....................
	$sql="INSERT INTO ALUMNES (ID, NAME, MAIL, COURSE, DAY, MONTH, YEAR) values ('".$_REQUEST['code']."', '".$_REQUEST['name']."', ".$_REQUEST['mail']."', ".$_REQUEST['codec'].", ".$_REQUEST['day'].", ".$_REQUEST['month'].", ".$_REQUEST['year'].")";
	mysqli_query($con,$sql);
	// ..................Finish.......................
	mysqli_close($con);
	header('Location: ACT38.php');
	exit;
?>