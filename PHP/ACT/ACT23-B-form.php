<!DOCTYPE html>
<html>
<head>
	<title></title>
</head> 
<body> 
	<?php
		// Create connection  (server, user, pass, db)
		$con=mysqli_connect("localhost","mpc","lol","SHOP");
		// Check connection
		if (mysqli_connect_errno($con)) {
			echo "Failed to connect to MySQL: ".mysqli_connect_error();
		}
		else {
			echo "<p>OK: Connected to database.</p>";
		}
		// Operate over database
		// ...............Do something....................
		$sql=mysqli_query($con,"SELECT * FROM CATEGORY") or die("Query error: ".mysqli_error($con));
		echo "<form action='ACT23-B.php' method='get'>";
		echo "Select a category: <select name='t1'><br>";
		while ($row=mysqli_fetch_array($sql)){
			echo '<option value="'.$row['NAME'].'">'.$row['NAME'].'</option>';
		}
		echo "</select>";
		echo "<input type='submit' value='submit'>";
		// ..................Finish.......................
		mysqli_close($con); 
	?>
</body>
</html>