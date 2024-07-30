<?php
    // $_SERVER = Super Global Variable that contains headers, paths, and script location.
    //            The entries in this array are created by the web server.
    //            Shows nearly everything you need to know about the current web page env.

    foreach($_SERVER as $key => $value){
        echo"{$key} = {$value} <br>";
    }
?>