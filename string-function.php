<?php
    $username = "Victor Buagas Jr";
    //$username = array("Victor", "Buagas", "Jr"); // for implode example
    $phone = "123-456-7890";

    $username = strtolower($username);
    //$username = strtoupper($username);
    //$username = trim($username); // remove any whitespace before or after the string
    //$username = str_pad($username ,20, "0"); // add characters to the string  
    //$phone = str_replace("-", "/", $phone);  
    //$username = strrev($username);  
    //$username = str_shuffle($username);  
    //$equals = strcmp($username, "Victor Buagas");  // comparing a string, if it's TRUE, it will return 0. If false, 1.
    //$count = strlen($username); 
    //$index = strpos($username, " "); // it will identify the index position of character indicated on the 2nd argument
    //$firstname = substr($username, 0, 6);  // create new string from a portion of another string  
    //$lastname = substr($username, 7);    
    //$fullname = explode(" ", $username); // separate string and make it to array
    //$username = implode(" ", $username); // make array into a string

    echo $username;
?>