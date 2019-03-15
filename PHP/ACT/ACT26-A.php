<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>LINKS MYSQL PHP Act26a</h1>
    <?php
    // Create connection
    $con=mysqli_connect("localhost","sergio","sergio","base1");
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


    $sql = "select codigo, nombrecurso from cursos";
    $rs = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($rs)){
        echo "<a href='Act26a.php?id=".$row['codigo']."'>".$row['nombrecurso']."</a><br>";
    }

    if (isset($_REQUEST['id'])){
        $sql1="select nombre from alumnos where codigocurso=".$_REQUEST['id'];
        $rs2=mysqli_query($con, $sql1);
        while ($row1 = mysqli_fetch_array($rs2)){
            echo $row1['nombre']."<br>";
        }
    }


    //Cerremaos la conexion.
    mysqli_close($con);

    ?>
    </body>
    </html>