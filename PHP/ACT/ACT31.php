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
	$exists=0;
	$u=$_REQUEST['user'];
	$sql="SELECT * FROM ALUMNES"; 
	$rs=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($rs)){
		if ($row['NAME']==$u) {
			echo "This username exists.<br/>";
			session_start();
			$_SESSION['user']=$_REQUEST['user']; 
			echo "<a href=ACT31-welcome>Click here</a>";
			global $exists;
			$exists=1;
			break;
		}
	}
	if ($exists!=1) {
		echo "This username does not exist<br/>";
		echo "You can view this page<br/>";
		echo "<a href=ACT31-form.html>Go back</a>";
	}
	// ..................Finish.......................
	mysqli_close($con); 
?>