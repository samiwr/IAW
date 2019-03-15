<!DOCTYPE html>
<html>
<meta charset="utf-8">
<body>
	<?php
		$usr=array('toni'=>'hola','miquel'=>'lol','jaume'=>'xeno','pap'=>'pop','pato'=>'cancer');
		$name=$_REQUEST['n'];
		$pass=$_REQUEST['p'];
		switch ($name) {
			case 'toni':
				if ($pass==$usr['toni']) {
					echo "Login correct";
				}
				else {
					echo "Wrong login";
				}
				break;
			case 'miquel':
				if ($pass==$usr['miquel']) {
					echo "Login correct";
				}
				else {
					echo "Wrong login";
				}
				break;
			case 'jaume':
				if ($pass==$usr['jaume']) {
					echo "Login correct";
				}
				else {
					echo "Wrong login";
				}
				break;
			case 'pap':
				if ($pass==$usr['pap']) {
					echo "Login correct";
				}
				else {
					echo "Wrong login";
				}
				break;
			case 'pato':
				if ($pass==$usr['pato']) {
					echo "Login correct";
				}
				else {
					echo "Wrong login";
				}
				break;
			default:
				echo "Invalid username";
				break;
		}
	?>
</body>
</html>