<!DOCTYPE html>
<html>
<body>
	<?php
		$count=0;
		echo "Name: ".$name=$_REQUEST['n'];
		echo "<br>";
		echo "<br>";
		echo "Selected sports:<br>";
		if (isset($_REQUEST['check1'])) {
			echo "-Football";
			echo "<br>";
			$count++;
		}
		if (isset($_REQUEST['check2'])) {
			echo "-Tennis";
			echo "<br>";
			$count++;
		}
		if (isset($_REQUEST['check3'])) {
			echo "-Basketball";
			echo "<br>";
			$count++;
		}
		if (isset($_REQUEST['check4'])) {
			echo "-Golf";
			echo "<br>";
			$count++;
		}
		echo "<br>";
		echo "Number of sports selected: ".$count;
	?>
</body>
</html>