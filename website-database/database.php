<?php
    // 1. MySQLi Extension
    // 2. PDO (PHP Data Objects)
    //    - Databases supported by PDO
    //      > MySQL, PostgreSQL, Oracle, Firebird, MS SQL Server, Sybase, Informix, IBM, FreeTDS, SQLite, Cubird, 4D

    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "businessdb";
    $conn = "";

    try {
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    }
    catch(mysqli_sql_exception){
        echo "Could not connect.<br>";
    }

?>