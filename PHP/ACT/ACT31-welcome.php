<?php
	if(isset($_SESSION['user'])) {
		echo "Welcome, ".$_SESSION['user'];
	}
	else {
		echo "Error, this session does not exist";
	}
?>