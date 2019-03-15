<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
<form action="ACT36-A.php" method="post">
    Name: <input type="text" name="nom"><br>
    <?php
    echo '<textarea name="datetime" rows="10" cols="60">';
    $dia = date("d/m/Y");
    echo "Date: ".$dia;
    $hora=date("H:i:s");
    echo "Hour ".$hora;
    echo "</textarea><br>";
    echo "<input type='hidden' name='date' value='".$dia."'>";
    echo "<input type='hidden' name='hour' value='".$hora."'><br/>";
    ?>
    <input type="submit" value="Send">
</form>
</body>
</html>