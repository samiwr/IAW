<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php
	$data=date("d/m/Y");
	if ($_REQUEST['day']==date('d') && $_REQUEST['month']==date('m') && $_REQUEST['year']==date('Y')){
		echo "Correct date";
	}
	else{
		echo "Wrong date<br/>";
		echo "Today's date is: ".$data;
	}
?>
</body>
</html>