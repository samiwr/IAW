<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
<?php
if(isset($_REQUEST['error'])){
    echo "Wrong password";
}
?>

<form action="ACT33.php" method="post">
    Enter your password:
    <input type="password" name="pass"><br>
    <input type="submit" value="Send">
</form>
</body>
</html>