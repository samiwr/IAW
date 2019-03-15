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
		$var=echo $_REQUEST['c'];
		$sql="SELECT * FROM ".$var;
		$rows=mysqli_query($con,$sql) or die("Problems in Query :".mysqli_connect_error());
		while ($row=mysqli_fetch_array($rows)) {
			echo $row['ID']." ";
			echo "Name:".$row['NAME']."<br>";
		}
		// ..................Finish.......................
		mysqli_close($con);
	?>
</body>
</html>