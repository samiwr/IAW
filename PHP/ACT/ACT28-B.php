<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Act28b</title>
</head>

<body>
<?php
//conexio;
$con=mysqli_connect("localhost", "sergio", "sergio", "shop");
if (mysqli_connect_errno($con)){
    echo "Failed to connect to MYSQL: ".mysqli_connect_error();
}
$sql ="insert into article (name, description, price) values ('".$_REQUEST['name']."', '".$_REQUEST['description']."', '".$_REQUEST['price']."')";

mysqli_query($con,$sql);

$sql1 = "select max(code) as max from article";
$rs =  mysqli_query($con,$sql1);
$row1 = mysqli_fetch_array($rs);
$max = $row1['max'];
move_uploaded_file($_FILES['file']['tmp_name'],$max);
echo "S'ha pujat correctament";
mysqli_close($con);
?>
</body>
</html>