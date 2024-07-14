<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="math-functions-1.php" method="post">
        <label>x: </label><br>
        <input type="text" name="x"><br>
        <label>y: </label><br>
        <input type="text" name="y"><br>      
        <label>z: </label><br>
        <input type="text" name="z"><br>                
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];

    $total = null;

    //$total = abs($x);
    //$total = round($x);
    //$total = floor($x); round down
    //$total = ceil($x); round up
    //$total = sqrt($x); square
    //$total = pow(x,y); - power
    //$total = min($x, $y, $z); - min
    //$total = max($x, $y, $z); - max
    //$total = pi();
    //$total = rand(1, 6); random

    echo $total;
?>
