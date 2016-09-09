<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    #Numeric Arrays
    $numbersArray = array(1,2,3,4,5);
foreach ($numbersArray as $value) {
      echo "value is $value <br>";
}
    unset($numbersArray[0]);
    echo "$numbersArray[1] <br>";
    #Dynamic Numeric Arrays
    $array= array();
    $array[0] = "sumran <br>";
    echo " $array[0]";
    #Associative Array
    $sal = array( "mohammed" => 2000, "qadir" => 1000, "zara" => 500);
    echo "$sal[mohammed] <br>";
    # dynamic associative array
    $salDyn = array();
    define("USER", "sumran");
    $salDyn[USER] = 500;
    echo $salDyn[USER]."<br>";
    unset($salDyn[USER]);
if ($salDyn[USER] == null) {
        echo "deleting done bro <br>";
}
    # MultiDimentional Array
    define("M", "Mohammad");
    define("PHY", "Physics");
    define("MATHS", "mathematics");
    $marks = array(M => array(PHY => 35, MATHS => 30));
    echo $marks[constant("M")][constant("MATHS")]." <br>";
    #Multidimensional dynamic array
    $marksDyn = array(array());
    $marksDyn[M][PHY] = 31;
    echo $marksDyn[constant("M")][constant("PHY")]. "<br>";
