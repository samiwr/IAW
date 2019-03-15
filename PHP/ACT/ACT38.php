<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
<form action="ACT38-A.php" method="post">
    Code <input type="text" name="code"/>
    Name <input type="text" name="name"/>
    Mail <input type="text" name="mail"/>
    Course <input type="text" name="codec"/>
    Day <select name="day">
        <?php
        for ($i=1; $i<32; $i++){
            echo '<option value="'.$i.'">'.$i.'</option>';
        }
        ?>
    </select>
    Mes <select name="month">
        <?php
        for ($i=1; $i<13; $i++){
            echo '<option value="'.$i.'">'.$i.'</option>';
        }
        ?>
    </select>
    Any <select name="year">
        <?php
        for ($i=1900; $i<2015; $i++){
            echo '<option value="'.$i.'">'.$i.'</option>';
        }
        ?>
    </select>
    <input type="submit" value="Send">
</form>
</body>
</html>