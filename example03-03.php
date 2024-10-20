<!DOCTYPE html>
<html>
    <head>
        <title>PHP, MySQL and JavaScript</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <?php
            $mycounter = 1;
            $mystring = "Hello";
            $myarray = array("One", "Two", "Three");

            echo $mycounter;
            echo "<br>";
            echo $mystring;
            echo "<br>";
            echo $myarray[0] . ", " . $myarray[1] . ", " . $myarray[2];
            ?>
        </div>
    </body>
</html>
