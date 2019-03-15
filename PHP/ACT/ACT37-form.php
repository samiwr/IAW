<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<form action="ACT37.php" method="post">
	Day: <select name="day">
    	<?php
		for ($i=1; $i<32; $i++){
			echo '<option value="'.$i.'">'.$i.'</option>';
		}
		?>
    </select>
	Month: <select name="month">
    	<?php
		for ($i=1; $i<13; $i++){
			echo '<option value="'.$i.'">'.$i.'</option>';
		}
		?>
    </select>
	Year: <input type="text" name="year" size="6">
<input type="submit" value="Send">
</form>
</body>
</html>