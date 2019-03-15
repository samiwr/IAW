<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
<?php
	if ($_REQUEST['pass']<>"1234") {
    	header("Location: ACT33-form.php?error=1");
	}
	else {echo "Welcome.";}
?>
</body>
</html>