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
	if ($_REQUEST['news']=="politics") {
		echo "<p>Ex-Trump campaign chief sentenced for fraud</p>";
	}
	elseif ($_REQUEST['news']=="economy") {
		echo "<p>Trouble with China's bet on The Bay</p>";
	}
	elseif ($_REQUEST['news']=="sports") {
		echo "<p>Guardiola: I am not going to Juventus</p>";
	}
	echo "<a href='ACT30-form.html'>Go back</a>";
	// ..................Finish.......................
	mysqli_close($con); 
?>