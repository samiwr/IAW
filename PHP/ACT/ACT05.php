<!DOCTYPE html>
<html>
<body>
	<?php
		$m1=rand(1,3);
		echo $m1;
		echo '<br>';
		if ($m1==1) {
			echo "ONE";
		}
		elseif ($m1==2) {
			echo "TWO";
		}
		else {
			echo "THREE";
		}
	?>
</body>
</html> 