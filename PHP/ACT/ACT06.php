<!DOCTYPE html>
<html>
<body>
	<?php
		$i=0;
		for ($i=0;$i<=10;$i++) { 
			echo $i*2;
			echo ' ';
		}
		echo '<br>';
		$i=0;
		while ($i<11) {
			echo $i*2;
			echo ' ';
			$i++;
		}
		echo '<br>';
		$i=0;
		do {
			echo $i*2;
			echo ' ';
			$i++;
		} while ($i<11);
	?>
</body>
</html> 