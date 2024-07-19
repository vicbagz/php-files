<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="while-loops.php" method="post">
        <input type="submit" name="stop" value="stop">
    </form>
</body>
</html>

<?php
    // while loop = do some code  independently while some condition remains  true

/*    $counter = 0; 

    while($counter <= 10){
        $counter ++;
        echo $counter . "<br>";
    }
*/

    // Example 1 - this will loop forever
/*    $seconds = 0;
    $running = true;

    while($running){
        // wait 1 second
        $seconds++;
        echo $seconds  . "<br>";
    }
*/

    // Example 2 - we will add a stop button
    $seconds = 0;
    $running = true;

    while($running){

        if(isset($_POST["stop"])){
            $running = false;
        }
        else {
            // wait 1 second
            $seconds++;
            echo $seconds  . "<br>";            
        }

    }  
?>