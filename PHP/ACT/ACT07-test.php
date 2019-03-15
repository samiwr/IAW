<!DOCTYPE html>
<html>
<body>
	<?php
		$name=$_REQUEST['n'];
		$age=$_REQUEST['a'];
		if ($age>=18) {
			echo $name." "." is an adult";
		}
		else {
			echo $name." "." is not an adult";
		}
	?>
</body>
</html>