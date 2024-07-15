<?php
    // variable is a reusable container that holds data, string, integer, float, boolean

    // string
    $name = "Victor Buagas";
    $food = "Pizza";
    $email = "dong@gmail.com";

    // whole integers
    $age = 21;
    $users = 2;
    $quantity = 10;

    // float
    $gpa = 2.5;
    $price = 9.99;
    $tax_rate = 5.1;

    //boolean
    $employed = true;
    $online = false;
    $for_sale = true;

    $total = null; // we will add value later

    echo"You have ordered {$quantity} x {$food}s<br>";
    $total = $quantity * $price;
    echo"Your total is \${$total}";
/*    echo"Hi $name<br>"; // string literal] 
    echo"Hello {$name}<br>";
    echo"You like {$food}<br>";
    echo"You email is {$email}<br>";
    echo"You are {$age} years old<br>";
    echo"There are {$users} users online<br>";
    echo"You would like to buy {$quantity} items.<br>";
    echo"You GPA is: {$gpa}<br>";
    echo"Your pizza is \${$price}<br>"; // added backslash on dollar sign (escape sequence)
    echo"The sales tax rate is {$tax_rate}%<br>";
    echo"Online status: {$online}"; // 1 is true, 0 is false.
    */
?>
