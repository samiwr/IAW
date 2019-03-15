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
		$sql=mysqli_query($con,"SELECT * FROM ARTICLE") or die("Query error: ".mysqli_error($con));
		while ($row=mysqli_fetch_array($sql)){
			mysqli_query($con,'update ARTICLE set PRICE='.$row['PRICE']*"1.1".' WHERE CODE='.$row['CODE']) or die("Query error: ".mysqli_error($con));
		}
		// ..................Finish.......................
		mysqli_close($con); 
	?>
</body>
</html>