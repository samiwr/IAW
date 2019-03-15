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
	$sql="SELECT * from ALUMNOS";
	$rs=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($rs)){
		echo "Code: ".$row['ID'];
    	echo "Name: ".$row['NAME'];
    	echo "Course: ".$row['COURSE']."<br/>";
	}
?>

