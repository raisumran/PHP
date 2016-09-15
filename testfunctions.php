<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require("functions.php");
function addFunctionTest()
{
    try {
        $ans = addFunction(10, 20);
        if ($ans ==  30) {
            echo "test1 passed <br>";
        } else {
            $error = " test 1 failed <br>";
            throw new Exception($error);
        }
        $ans = addFunction(-10, -20);
        if ($ans ==  -30) {
            echo "test2 passed <br>";
        } else {
            $error = " test 2 failed <br>";
            throw new Exception($error);
        }
            echo "addFunction works <br>";
    } catch (Exception $e){
        echo 'Caught exception:   ',  $e->getMessage(), "\n";
    }
}
addFunctionTest();
