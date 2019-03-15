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
		$sql="INSERT INTO CURSOS (ID, NAME) VALUES (7, '$_REQUEST[nom]');";
		$rows=mysqli_query($con,$sql) or die("Problems in Query: ".mysqli_connect_error());
		if (mysqli_query($con,$sql)) {
			mysql_query("INSERT INTO cursos (ID, NAME) VALUES (7, '$_REQUEST[nom]')");
			echo "Course added";
		}
		// ..................Finish.......................
		mysqli_close($con);
	?>
</body>
</html>