<?php
    /**
     * this file contains addition function
     */
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    /**
     * This class covers basic maths operations
     * this class has functions for subtraction and addition
     * @todo [need to implement and declare subtract($num1, $num2)]
     * @author [sumran]
     */
class Calculator
{
        /**
         * Addition function
         * @method add
         * @param  [is_integer]      $num1 [description]
         * @param  [is_integer]      $num2 [description]
         * @return  [is_integer]      $sum  [sum of inputs]
         */
    public function add($num1, $num2)
    {
        $sum = $num1 + $num2;
        return $sum;
    }
}
