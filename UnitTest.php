<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require("functions.php");
    $ans = addFunction(10, 20);
if ($ans ==  30) {
        echo "test1 passed";
} else {
        echo "test1 failed";
}
