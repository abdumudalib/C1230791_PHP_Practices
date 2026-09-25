<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
<?php

$num1 = 10;
$num2 = 25;
$num3 = 15;

// Find the greatest number
if ($num1 > $num2 && $num1 > $num3) {
    $greatest = $num1;
} elseif ($num2 > $num1 && $num2 > $num3) {
    $greatest = $num2;
} else {
    $greatest = $num3;
}

// Find the smallest number
if ($num1 < $num2 && $num1 < $num3) {
    $smallest = $num1;
} elseif ($num2 < $num1 && $num2 < $num3) {
    $smallest = $num2;
} else {
    $smallest = $num3;
}

echo "Greatest number: $greatest <br>";
echo "Smallest number: $smallest";

?>

```

**Output:**

Greatest number: 25
Smallest number: 10


</body>
</html>