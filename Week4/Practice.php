<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice Week 4</title>
</head>
<body>
    
<?php
//local variable and Global variable also Globals 

function myFunction() {
    $x = 5; // local variable
    echo "The value of x is: $x <br>";
}

myFunction();

// Global variable

$y = 10; // global variable

function myGlobalFunction() {
    global $y; // Accessing the global variable
    echo "The value of y is: $y <br>";
}

myGlobalFunction();


?>


</body>
</html>