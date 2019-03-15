<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Act13b</title>
</head>

<body>
<?php
$file=fopen("pizza.txt", "w");
fwrite($file, "Name: ".$_REQUEST['nom']." Adress: ".$_REQUEST['adr'].PHP_EOL);
fwrite($file, "Pedido: ".PHP_EOL);

if(isset($_REQUEST['prosciuto'])){
    $numP=$_REQUEST['qPro'];
    fwrite($file, "Prosciuto nº:".$numP." 5.50 €/unidad".PHP_EOL);
}
if(isset($_REQUEST['napolitana'])){
    $numN=$_REQUEST['qNap'];
    fwrite($file, "Napolitana nº:".$numN." 6.75 €/unidad".PHP_EOL);
}
if(isset($_REQUEST['mozzarella'])){
    $numM=$_REQUEST['qMoz'];
    fwrite($file, "Mozzarella nº:".$numM." 4.75 €/unidad".PHP_EOL);
}
$total=$numP*'5.50'+$numN*'6.75'+$numM*'4.75';
fwrite($file, "Total: ".$total."€");

fclose($file);
?>
</body>
</html>