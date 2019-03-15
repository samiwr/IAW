<!DOCTYPE html>
<html>
<meta charset="utf-8">
<body>
	<?php
		$week=array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
		$m1=date('w');
		echo $week[$m1];
	?>
</body>
</html>