<?php
    // Logical operators = combine conditional statements
    // If(condition1 && condition2)

    // && = True if both conditions are true
    // || = True if at least one condition is true
    //  ! = True if false. False if true

    // Example

 //   $temp = 100;

 //   if ($temp >= 0 && $temp <= 30) {
 //       echo "The weather is good.";
 //   }
 //   else {
 //       echo "The weather is bad.";
 //   }

 /*   $temp = 15;
    $cloudy = true;

    if ($temp < 0 || $temp > 30) {
        echo "The weather is bad.<br>";
    }
    else {
        echo "The weather is good.<br>";
    }   

    if($cloudy){
        echo "It's cloudy.";
    }
    else {
        echo "It's sunny.";
    }
*/

// Example 1
/*    $age = 18;
    $citizen = true;

    if($age >= 18 && $citizen){
        echo "You can vote.";
    }
    else {
        echo "You cannot vote";
    }
*/

// Example 2

    $child = true;
    $senior = false;
    $ticket = null;

    if($child || $senior){
        $ticket = 10;
    }
    else {
        $ticket = 15;
    }

    echo "The ticket price is \${$ticket}";
?>