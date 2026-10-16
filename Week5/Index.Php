<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 5 </title>
</head>
<body>

   <form action="Index.php" method = "post" enctype="multipart/form-data">
     <label> Select Your image</label> <hr>
     <input type="file" name="stdimage"><hr>
     <input type="submit" name="submit" value="Upload Image">
    </form>

    <?php

    //Read all information
    if(!empty( $_FILES[ 'stdimage']['name'])) //True Or False
    {
        echo "File name is :".$_FILES['stdimage']['name']."<br>";
        echo "File type is :".$_FILES['stdimage']['type']."<br>";
        echo "File size is :".$_FILES['stdimage']['size']."<br>";
        echo "File temp name is :".$_FILES['stdimage']['tmp_name']."<br>";

    }
    else 
    {
        echo "Please Select File";
    }

    //moved file to final destination

    $temp = $_FILES['stdimage']['tmp_name'];
    $Destination = "D:/PHP/New PHP_Update/".$_FILES['stdimage']['name'];
    move_uploaded_file($temp, $Destination);
    echo "File uploaded successfully.";
    ?>


</body>
</html>