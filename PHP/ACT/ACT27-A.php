<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Act27a</title>
</head>

<body>
<?php
//conexio;
$con=mysqli_connect("localhost", "sergio", "sergio", "base1");
if (mysqli_connect_errno($con)){
    echo "Failed to connect to MYSQL: ".mysqli_connect_error();
}
if(isset($_REQUEST['pos'])){
    $first=$_REQUEST['pos'];}
else {$first=0;}

$sql='select cursos.codigo, cursos.nombrecurso, alumnos.nombre from cursos , alumnos  where cursos.codigo=alumnos.codigocurso order by cursos.codigo, cursos.nombrecurso limit '.$first.', 1';

$rs=mysqli_query($con, $sql);
    while($row=mysqli_fetch_array($rs)){
        echo "ID: ".$row['codigo']."<br>";
        echo "NomCurs: ".$row['nombrecurso']."<br>";
        echo "NomAlum: ".$row['nombre']."<br>";
    }

    if ($_REQUEST['pos']!=0){
        $previous=$first-1;
        $next=$first+1;
        echo "<a href='Act27a.php?pos=".$previous."'>Previous</a>";
        echo "<a href='Act27a.php?pos=".$next."'>Next</a>";
    }
    else {
        $next=$first+1;
        echo "<a href='Act27a.php?pos=".$next."'>Next</a>";
    }

mysqli_close($con);
?>
</body>
</html>