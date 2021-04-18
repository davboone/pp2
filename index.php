<?php
    /*
     * Author: David Boone
     * Date: 04 - 15 - 21
     * File: index.php
     * Pair Program 2
     */

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 2</title>
</head>
<body>
    <header>
        <h1>Pair Program 2</h1>
    </header>
    <?php
        include ("functions.php");
        echo "<h1>PHP Array Practice</h1>";

        echo "<br>";
        echo "<h2>Step 2</h2>";
        $numbers = array(7,9,8,9,8,8,6);
        printArr($numbers);

        echo "<br>";
        echo "<h2>Step 4</h2>";
        largest($numbers);

        echo "<br>";
        echo "<h2>Step 5</h2>";

        echo "Array with no duplicates: ".removeDups($numbers);
    ?>
</body>
</html>