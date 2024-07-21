<?php
    // array = "variable" which can hold more than one value at a time

    $foods = array("apple", "orange", "banana", "coconut");

/*  echo $foods[0] . "<br>";
    echo $foods[1] . "<br>";
    echo $foods[2] . "<br>";
    echo $foods[3] . "<br>";  
*/  
    // instead of echoing all foods 1 by 1, we can use foreach()

    // $foods[0] = "pineapple"; 

    // array_push($foods, "pineapple", "kiwi"); // will add new array
    // array_pop($foods); // will remove the last element of your array
    // array_shift($foods); // will remove the first element of your array
    // $foods = array_reverse($foods); // will reverse arrays
    // echo count($foods);
    
    foreach($foods as $food) {
        echo $food . "<br>";
    }
    
?>