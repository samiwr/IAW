<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Act27b</title>
</head>

<body>
<?php
//conexio;
$con=mysqli_connect("localhost", "sergio", "sergio", "shop");
if (mysqli_connect_errno($con)){
    echo "Failed to connect to MYSQL: ".mysqli_connect_error();
}
if(isset($_REQUEST['pos'])){
    $first=$_REQUEST['pos'];}
else {$first=0;}

$sql='select * from article limit '.$first.', 1';
$result=mysqli_query($con, $sql);
while($row=mysqli_fetch_array($result)){
    echo "ID: ".$row['code']."<br/>";
    echo "Precio: ".$row['price']."<br/>";
    echo "Categoria: ".$row['categorycode']."<br/>";
    echo "Oferta: ".$row['bargain']."<br/>";
    echo "Nombre: ".$row['name']."<br/>";
    echo "Descripcion: ".$row['description']."<br/>";
}

if ($_REQUEST['pos']!=0){
    $previous=$first-1;
    $next=$first+1;
    echo "<a href='Act27b.php?pos=".$previous."'>Previous</a>";
    echo "<a href='Act27b.php?pos=".$next."'>Next</a>";
}
else {
    $next=$first+1;
    echo "<a href='Act27b.php?pos=".$next."'>Next</a>";
}
mysqli_close($con);
?>
</body>
</html>