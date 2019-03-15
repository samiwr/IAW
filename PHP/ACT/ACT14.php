<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Act14</title>
</head>

<body>
<?php
$file=fopen("pizza.txt", "r") or exit("Unable to open file!");
while(!feof($file)){
    echo fgets($file)."<br/>";
}
fclose($file);
?>
</body>
</html>