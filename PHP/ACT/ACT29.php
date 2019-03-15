<?php
	// Create connection  (server, user, pass, db)
	$con=mysqli_connect("localhost","mpc","lol","futbol");
	// Check connection
	if (mysqli_connect_errno($con)) {
		echo "Failed to connect to MySQL: ".mysqli_connect_error();
	}
	else {
		echo "<p>OK: Connected to database.</p>";
	}
	// Operate over database
	// ...............Do something....................
	$u=$_REQUEST['usr'];
	setcookie("user","$u",time()+3600);
	echo "<p>Your username is: ".$_COOKIE['user']." </p>";
	// ..................Finish.......................
	mysqli_close($con); 
?>