<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>

<style>
    
  
</style>


<?php

//Forms 
//using style in form and input tag input

echo "<h2> Forms Practice </h2>";

// Form with input fields and buttons
echo "<form action='Forms.php' method='post'>
    <label for='name'>Enter Your Full Name:</label> <br>
    <input type='text' id='name' name='name' placeholder='Your Name'><br><br>

    <label for='email'>Enter Your Password:</label><br>
    <input type='password' id='email' name='email' placeholder='Your Password'><br><br>
    <input type='submit' value='Submit'>
    <button type='reset'>Reset</button>
    <button type='button'>Click Me</button>
    <textarea name='message' rows='7' cols='50' placeholder='Enter your message here'></textarea><br><br>

    <label >Gender :</label><br>
    <input type='radio' name='options' > Male

    <input type='radio' name='options' > Female<br>    
</form>";


//Calling Php 

echo "FirstName is: " . $_POST['name'];
echo "<br>";
echo "Password is: " . $_POST['email'];
echo "<br>";
echo "Message is: " . $_POST['message'];
echo "<br>";
echo "Selected Option is: " . $_POST['options'];

?>
    
</body>
</html>