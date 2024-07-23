<?php
    // function = write some code once, reuse when you need it
    //            type () after function name to invoke
    //            ex. add() subtract()  multiply() divide()

    /*
    function happy_birthday($first_name, $age){
        echo"Happy Birthday dear {$first_name}! <br>";
        echo"Happy Birthday to you! <br>";
        echo"Happy Birthday dear {$first_name}! <br>";
        echo"You are {$age} years old! <br><br>";
    }

    happy_birthday("Victor", 28);
    happy_birthday("Dong", 38);
    happy_birthday("Do", 18);
    */

    /*
    function is_even($number){
        $result = $number % 2;

        if($result == 1){
            echo"Your number is odd.";
        }
        elseif($result == 0){
            echo"Your number is even.";
        }
        return;
    }

    echo is_even(10);
    
    */

    function hypotenuse(float $a, float $b){
        $c = sqrt($a ** 2 + $b ** 2);
        return $c;
    }
    
    echo hypotenuse(8,9);
?>



