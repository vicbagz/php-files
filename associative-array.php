<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="associative-array.php" method="post">
        <label for="">Enter a country</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>

<?php
    // associative array = An array made of key=value pairs

    // countries => capitals
    // id => username
    // item => price

    $capitals = array("USA"=>"Washington D.C.",
                      "Japan"=>"Tokyo",
                      "South Korea"=>"Seoul",
                      "India"=>"New Delhi");

    $capital = $capitals[$_POST["country"]];

    echo"The capital is {$capital}";

    // echo $capitals["USA"]; // to view one associative array
    
    // $capitals["USA"] = "Las Vegas"; // change a value of an array
    // $capitals["China"] = "Beijing"; // add new array
    // array_pop($capitals); // removes the last item of an array
    // array_shift($capitals); // removes the first item of an array
    // $keys = array_keys($capitals); // displaying the keys
    // $values = array_values($capitals); // displaying the values
    // $capitals = array_flip($capitals); // flip the values and keys
    // $capitals = array_reverse($capitals); // reverse the array
    // echo count($capitals);

/*  foreach($capitals as $key => $value){
        echo"{$key} = {$value} <br>";
    }
*/        

// THIS IS FOR A KEYS AND VALUES

/*    foreach($values as $value){
        echo"{$value    } <br>";
    }
*/

?>