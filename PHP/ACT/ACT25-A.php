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
		$sql="select cursos.NAME as Course, alumnes.name as Student_name from cursos join alumnes on cursos.ID=alumnes.ID;";
		$rs=mysqli_query($con,$sql) or die("Query error: ".mysqli_error($con));
		while($row=mysqli_fetch_array($rs)){
			echo "Course Name: ".$row['Course']."<br/>";
			echo "Students: ".$row['Student_name']."<br/><br/>";
		}
		// ..................Finish.......................
		mysqli_close($con); 
	?>
</body>
</html>