<html>
<head>
	<title>Connect to DB (PHP)</title>
</head>
<body>
	<?php
		// Create connection
		$con=mysqli_connect("localhost","mpc","lol","asix");
		// Check connection
		if (mysqli_connect_errno($con)) {
			echo "Failed to connect to MySQL: ".mysqli_connect_error();
		}
		else {
			echo "<p>OK: Connected to database.</p>";
		}
		// Operate over database
		// ...............Do something....................
		$sql="
			CREATE DATABASE IF NOT EXISTS SHOP;
			USE SHOP;
			CREATE TABLE ARTICLE (
    			CODE INT PRIMARY KEY AUTO_INCREMENT, 
    			NAME VARCHAR(50), 
    			DESCRIPTION VARCHAR(100), 
    			PRICE DOUBLE, 
    			CATEGORYCODE INT, 
    			BARGAIN BOOLEAN
			);
			CREATE TABLE CATEGORY (
    			CODE INT PRIMARY KEY AUTO_INCREMENT, 
    			NAME VARCHAR(50)
			);"
		if (mysqli_query($con,$sql)) {
			echo "Table created successfully";
		}
		else {
			"Error creating DB: ".mysqli_error($con);
		}
		// ..................Finish.......................
		mysqli_close($con);
	?>
</body>
</html>