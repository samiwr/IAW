<!DOCTYPE html>
<html>
<meta charset="utf-8">
<body>
	<?php
		echo "Your name: ".$name=$_REQUEST['n'];
		echo "<br><br>";
		echo "Your salary:<br>";
		if ($_REQUEST['sel']=="1k") {
			echo "Between 1€ and 1000€";
		}
		elseif ($_REQUEST['sel']=="2k") {
			echo "Between 1001€ and 3000€";
		}
		else {
			echo "Higher than 3000€<br>";
			echo "You'll have to pay taxes because your salary is higher than 3000€";
		}
	?>
</body>
</html>