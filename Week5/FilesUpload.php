<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FileUploaded</title>
</head>

<form action="FileUploa.php">

</form>
<body>

    <?php

    //Read all information
    if(!empty( $_FILES[ 'stdimage']['name'])) //True Or False
    {
    echo "File name is :".$_FILES['stdimage']['name'];
    echo "File type is :".$_FILES['stdimage']['type'];
    echo "File size is :".$_FILES['stdimage']['size'];
    echo "File temp name is :".$_FILES['stdimage']['tmp_name'];

    }
    else 
    {
        echo "Please Select File";
    }

    ?>
    
</body>
</html>