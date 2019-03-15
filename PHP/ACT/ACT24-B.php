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
		while($row=mysqli_fetch_array($sql)) {
			echo "ID: ".$row['ID']."<br>";
			echo "Name: ".$row['NAME']."<br>";
			echo "Course: ".$row['COURSE']."<br>";
			echo "**<br>";
		}
		echo "<br>";
		$sql2=mysqli_query($con,"SELECT COUNT(ID) FROM ALUMNES") or die("Query error: ".mysqli_error($con));
		$row2=mysqli_fetch_array($sql2);
		echo "Total: ".$row2['COUNT(ID)'];
		// ..................Finish.......................
		mysqli_close($con); 
	?>
</body>
</html>