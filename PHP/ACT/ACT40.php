<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
<table border="1"><tr>
        <?php
        for($x=32; $x<256; $x++){
            echo "<td>".sprintf("%c",$x)."</td>";
        } ?>
    </tr></table>
</body>
</html>