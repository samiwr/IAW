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
		$sql=mysqli_query($con,"SELECT * FROM CURSOS") or die("Query error: ".mysqli_error($con));
		while ($row=mysqli_fetch_array($sql)){
			mysqli_query($con,'update CURSOS set NAME="'.$row['NAME'].'2014" WHERE ID='.$row['ID']) or die("Query error: ".mysqli_error($con));
		}
		// ..................Finish.......................
		mysqli_close($con); 
	?>
</body>
</html>