<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="if.php" method="post">
        <input type="text" name="age">
        <input type="submit" value="submit">
    </form>
</body>
</html>
-->

<?php
    // if statement = if some condition is true, do something
    //                if condition is false, don't do it

 /*   $age = $_POST["age"];

    if ($age >= 100){
        echo "You are too old for this site.";
    }
    elseif ($age >= 18){
        echo "You may enter the site.";
    }
    elseif ($age <= 0){
        echo "That was not a valid age.";
    }
    else {
        echo "You must be 18+ to enter this site.";
    }
*/

// sample 2
/*    $adult = true;

    if ($adult){
        echo "You may enter the site.";
    }
    else {
        echo "You must be an adult to enter.";
    }
*/

// sample 3

    $hours = 50;
    $rate = 15;
    $weekly_pay = null;

    if($hours <= 0){
        $weekly_pay = 0;
    }
    elseif($hours <= 40){
        $weekly_pay = $hours * $rate;
    }
    else{
        $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
    }

    echo "You made \${$weekly_pay} this week.";
?>
