<!DOCTYPE html>
<html>
<head>
	<title></title>
</head> 
<body> 
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
		$sql=mysqli_query($con,"SELECT * FROM ALUMNES") or die("Query error: ".mysqli_error($con));
		echo "<form action='ACT22-C.php' method='get'>";
		while ($row=mysqli_fetch_array($sql)){
			echo "<input type='radio' COURSE='".$row['COURSE']."' value='".$row['ID']."'>".$row['COURSE']."</input>"."<br>";
		}
		echo "Student's name: <input type='text' name='st'><br>";
		echo "<input type='submit' name='submit'/>";
		// ..................Finish.......................
		mysqli_close($con); 
	?>
</body>
</html>