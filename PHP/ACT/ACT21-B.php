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
		echo "<form action='ACT20-C-test.php' method='get'>Check any category you want to delete:";
		echo "<ul>";
		while ($row=mysqli_fetch_array($sql)){
			echo "<li><input type='checkbox' name='products' value='".$row['NAME']."'/>".$row['NAME']."</li>";
		}
		echo "</ul>";
		echo "<br/><input type='submit' name='sub' value='Submit'/></form>";
		// ..................Finish.......................
		mysqli_close($con); 
	?>
</body>
</html>