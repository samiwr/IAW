<!DOCTYPE html>
<html>
<head>
	<title></title>
</head> 
<body> 
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
		$sql=mysqli_query($con,"SELECT * FROM ALUMNES") or die("Query error: ".mysqli_error($con));
		echo "<form action='ACT23-A.php' method='get'>";
		echo "Select a student ID: <input type='text' name='t1'><br>";
		echo "<input type='submit' value='submit'>";
		// ..................Finish.......................
		mysqli_close($con); 
	?>
</body>
</html>