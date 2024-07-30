<?php
    // cookie = Information about a user stored in a user's web-browser 
    //          targeted advertisements, browsing preferences, and 
    //          other non-sensitive data
    //          F12 -> applications to view cookies

    setcookie("FAV_FOOD", "rice", time() + (86400 * 2)  , "/");
    setcookie("FAV_DRINK", "water", time() + (86400 * 5), "/");
    setcookie("FAV_DESSERT", "mango float", time() + (86400 * 1), "/");

    /*
    foreach($_COOKIE as $key => $value){
        echo "{$key} = {$value}<br>";
    }
    */

    if(isset($_COOKIE["FAV_FOOD"])){
        $fav_food = $_COOKIE["FAV_FOOD"];
        echo "Your favorite food is {$fav_food}";
    }
    else {
        echo"I don't know your favorite food.";
    }
?>