<?php
    // Arithmetic Operators
    // + - * / ** %
    $x = 10;
    $y = 3;
    $z = null;

    //$z = $x + $y;
    //$z = $x - $y;
    //$z = $x * $y;
    //$z = $x / $y;
    //$z = $x ** $y;
    //$z = $x % $y; // the modulus sign gives you the remainder number. This also helps determining either the number is even or odd.
    //echo $z;

    // Increment / decrement operators
    // ++, --
    //$counter = 0;

    //$counter++;
    //$counter--;
    //$counter+=5;
    //$counter-=5;
    //echo"Counter: {$counter}";

    // Operator Precedence
    // ()
    // **
    // * / %
    // + -
    // calculations are followed by order listed above

    $total = 1 + 2 - 3 * 4 / 5 ** 6;
    echo $total;

?>