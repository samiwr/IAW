<?php
copy($_FILES['file1']['tmp_name'],$_FILES['file1']['name']);
$name=$_FILES['file1']['name'];
copy($_FILES['file2']['tmp_name'],$_FILES['file2']['name']);
$name=$_FILES['file2']['name'];
copy($_FILES['file3']['tmp_name'],$_FILES['file3']['name']);
$name=$_FILES['file3']['name'];
header('Location: Act28a.php');
exit;
?>