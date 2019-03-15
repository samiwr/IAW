<!DOCTYPE html>
<html>
<body>
	<?php
		$s=rand(0,10);
		echo "Random number: ";
		echo $s;
		echo "<br>";
		if ($s>=5) {
			echo "You passed the test";
		}
		else {
			echo "You failed the test";
		}
	?>
</body>
</html> 