<?php
/*
     * Author: David Boone
     * Date: 04 - 15 - 21
     * File: functions.php
     * Pair Program 2
     */

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

function printArr($array) {
    foreach ($array as $num){
        echo $num."<br>";
    }
}