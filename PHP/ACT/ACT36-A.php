<?php
	$file = fopen("inisession.txt", "a") or exit("File not created!.");
	$data = "Date ".$_REQUEST['date']." hour ".$_REQUEST['hour'];
	$infor = "Name: ".$_REQUEST['name']." Information: ".$_REQUEST['coment'];
	$result = $data." ".$infor;
	fputs($file, $result);
	fclose($file);
	header('Location: ACT36-B.php');
	exit;
?>