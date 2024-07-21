<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="isset-empty.php" method="post">
        <label for="">username: </label>
        <input type="text" name="username"><br>
        <label for="">password: </label>
        <input type="password" name="password"><br>        
        <input type="submit" value="login" name="login">
    </form>
</body>
</html>

<?php
    /*
    foreach($_POST as $key => $value){
        echo"{$key} = {$value} <br>";
    }
    */
    
    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)){
            echo"Username is missing";
        }
        elseif(empty($password)){
            echo"Password is missing";
        }
        else {
            echo"Hello {$username}";
        }
    }
?>

<?php
    // isset() = Returns TRUE if a variable is declared and not null
    // empty() = Returns TRUE if a variable is not declared, false, null, ""

    // To determine HTML elements are field in or otherwise interacted with. 

    $username = false;

/*    if(isset($username)){
        echo"This variable is set";
    }
    else {
        echo"This variable is NOT set";
    }
*/

/*    if(empty($username)){
        echo"This variable is set";
    }
    else {
        echo"This variable is NOT set";
    }
*/        
?>