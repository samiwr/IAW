<!DOCTYPE html>
<html>
<body>
	<?php
		$name="Sami Weise";
		$age=84;
		$wgt=77.34;
		$cat="Middleweight";
		$champ=true;
		if ($champ==true){
			$champ="Yes";
		}
		else {
			$champ="No";
		}
	echo "<table border='1'>";
	echo	"<tr>";
	echo		"<th>Name</th>";
	echo		"<th>Age</th>";
	echo		"<th>Weight</th>";
	echo		"<th>Category</th>";
	echo		"<th>Champion</th>";
	echo	"</tr>";
	echo	"<tr>";
	echo		"<td>$name</td>";
	echo		"<td>$age</td>";
	echo		"<td>$wgt Kg</td>";
	echo		"<td>$cat</td>";
	echo		"<td>$champ</td>";
	echo	"</tr>";
	echo "</table>";
	?>
</body>
</html>
