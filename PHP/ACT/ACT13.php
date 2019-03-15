<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>ex php 13</title>
</head>

<body>
<form action="Act13b.php" method="post">
    <fieldset>
        Name: <input type="text" name="nom"/>
        Adress: <input type="text" name="adr"/><br/><br/>
        Prosciuto <input type="checkbox" name="prosciuto"/>
        Quantity:<select name="qPro">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select><br/>
        Napolitana <input type="checkbox" name="napolitana"/>
        Quantity:<select name="qNap">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select><br/>
        Mozzarella <input type="checkbox" name="mozzarella"/>
        Quantity:<select name="qMoz">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
    </fieldset>
    <input type="submit" value="Send"/>
</form>
</body>
</html>