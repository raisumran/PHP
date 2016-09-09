<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require("functions.php");
function addFunctionTest()
{
    echo "muhammad Sumran";
    $ans = addFunction(10, 20);
    if ($ans ==  30) {
        echo "test1 passed";
    } else {
        echo "test1 failed";
        # need to do error handling may be throw an exception
    }
    $ans = addFunction(-10, -20);
    if ($ans ==  -30) {
        echo "test2 passed";
    } else {
        echo "test2 failed";
        # need to do error handling , may be throw an exception
    }
        echo "addFunction works";
}
addFunctionTest();
