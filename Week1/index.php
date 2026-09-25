<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 1 - PHP Basics</title>
</head>

<body>

    <?php

    // ECHO AND PRINT
    echo "Hello, World!";
    print "Ku soo dhawoow PHP";
    echo '<h1>Barashada PHP - Week 1</h1>';

    // VARIABLES
    $name = "Abdumudalib";
    echo "Welcome, $name <br />";

    $student = "Abdillah";
    echo "Ardayga: $student <br />";

    // CONSTANT
    define("SITE_OWNER", "Ibrahim");
    echo "Site Owner: " . SITE_OWNER . "<br />";

    // NUMBER VARIABLE
    $age = 24;
    echo "Da'da: ", $age, "<br /><br />";

    // CONTROL STRUCTURES
    // If / Else Statements
    echo "<b>If/Else Evaluation:</b><br />";

    if ($age > 25) {
        echo "Waxaad ka weyn tahay 25 sano.<br />";
    } elseif ($age > 20) {
        echo "Waxaad ku jirtaa da'da dhalinyarada.<br />";
    } else {
        echo "Da'daadu way ka yar tahay 20 sano.<br />";
    }

    // Switch Statement
    echo "<br /><b>Switch Evaluation:</b><br />";

    switch (true) {
        case ($age > 25):
            echo "Da'du waxay ka weyn tahay 25.<br />";
            break;

        case ($age > 20):
            echo "Abdumudalib waa arday da'yar.<br />";
            break;

        default:
            echo "Da'du way ka yar tahay 20.<br />";
    }

    ?>

</body>
</html>
