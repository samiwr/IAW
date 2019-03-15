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
		echo "<form action='ACT22-B-form.php' method='get'>";
		echo "<input type='text' name='t1'><br>";
		echo "<input type='text' name='t2'><br>";
		echo "<select name='t3'>";
		while ($row=mysqli_fetch_array($sql)){
			echo '<option value="'.$row['NAME'].'">'.$row['NAME'].'</option>';
		}
		echo "<select>";
		echo "<input type='submit' value='submit'>";
		// ..................Finish.......................
		mysqli_close($con); 
	?>
</body>
</html>