<!DOCTYPE html>
<html>
<body>
	<?php
		$name=$_REQUEST['n'];
		if ($_REQUEST['radio1']=="no") {
			echo $name." "."has no studies";
		}
		elseif ($_REQUEST['radio1']=="ele") {
			echo $name." "."has elementary school studies";
		}
		elseif ($_REQUEST['radio1']=="mid") {
			echo $name." "."has middle school studies";
		}
		else {
			echo $name." "."has university studies";
		}
	?>
</body>
</html>