<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>LINKS MYSQL PHP Act26b</h1>
    <?php
    // Create connection
    $con=mysqli_connect("localhost","sergio","sergio","shop");
    // Check connection
    if (mysqli_connect_errno($con))
    {
        echo "Failed to connect to MySQL: " .
            mysqli_connect_error();
    }
    else {
        echo "<p>OK: Connected to the Database.</p>";
    }
    //Jugar con la base de datos.
    // Create database.


    $sql = "select code, name from category";
    $rs = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($rs)){
        echo "<a href='Act26b.php?id=".$row['code']."'>".$row['name']."</a><br>";
    }
    if (isset($_REQUEST['id'])){
        $sql1 = "select name from article where categorycode=".$_REQUEST['id'];
        $rs2 = mysqli_query($con, $sql1);
        while ($row1 = mysqli_fetch_array($rs2)){
            echo $row1['name']."<br>";
        }
    }
    //Cerremaos la conexion.
    mysqli_close($con);

    ?>
    </body>
    </html>