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
		$sql="SELECT * FROM ARTICLE WHERE BARGAIN LIKE 1 ORDER BY PRICE DESC";
		$rows=mysqli_query($con,$sql) or die("Problems in Query :".mysqli_connect_error());
		while ($row=mysqli_fetch_array($rows)) {
			echo $row['CODE']." ";
			echo "Name: ".$row['NAME']." ";
			echo "Description: ".$row['DESCRIPTION']." ";
			echo "Price: ".$row['PRICE']." ";
			echo "Cat. code: ".$row['CATEGORYCODE']." ";
			echo "Bargain: ".$row['BARGAIN']."<br>";
		}
		// ..................Finish.......................
		mysqli_close($con);
	?>
</body>