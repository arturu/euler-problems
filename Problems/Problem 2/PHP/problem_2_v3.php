<?php
/***********************
 *
 * Problem 2 from Project Euler
 *
 * Each new term in the Fibonacci sequence is generated by adding the previous two terms. By starting with 1 and 2, the first 10 terms
 * will be:
 *  
 *  1,2,3,5,8,12,21,34,55,89, ...
 *
 * By considering the terms in the Fibonacci sequence whose values do not exceed four million, find the sum of the even-valued terms
 *
 * PLEASE NOTE
 * In order to work you must have, at least, PHP 5.3.x or Higher
 *
 * REGARDING THE PERFORMANCE
 * This is not the final version of the script, you can improve the algorithm by submitting a pull request or an issue on Github.
 * Feel free to ask for anything on Github.
 *
 * @author Santo Antonio Terranova (@tng46)
 * @version 2.0.0
 **************************/
    $startTest = microtime();
    $limit = 4e6; //set the limit to 4 milion
    $a = 2;  
    $b = 3;  
    $result = 0;
    do {
        $result += $a;
        $c2 = $a + $b + $b;
        $c3 = $a + $a + $b + $b + $b;
        $a = $c2;
        $b = $c3;
    } while ($a < $limit);
    $endTest = microtime();
    echo "Test time: ". ($endTest - $startTest) * 1000000 . "\n";
