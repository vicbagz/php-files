<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sanitize-validate.php" method="post">
    username<br>
    <input type="text" name="username"><br> 
    age<br>    
    <input type="text" name="age"><br>
    email<br>      
    <input type="email" name="email"><br> 
    <input type="submit" value="Log In" name="login">
    </form>
</body>
</html>

<?php
    // sanitization will strip certain character of user input
    // sanitize example
    /*
    if(isset($_POST["login"])){
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        
        echo "Your email is {$email}";
    }
    */
    
    // validation if doesn't pass it just return an empty string
    // validate example
    if(isset($_POST["login"])){
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        
        if(empty($email)){
            echo "That email wasn't valid.";
        }
        else {
            echo "Your email is {$email}";
        }
        
    }
?>