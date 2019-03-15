<!DOCTYPE html>
<html>
<body>
	<?php
		function chck() {
			$pas1=$_REQUEST['p1'];
			$pas2=$_REQUEST['p2'];
			if ($pas1==$pas2) {
				echo "Both passwords are equal, correct";
			}
			else {
				echo "Passwords are not equal";
			}
		}
		chck();
	?>
</body>
</html>