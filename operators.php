<?php

// ..............PHP Arithmetic Operators ........... 






// This is the addition
$x = 10;  
$y = 6;

echo ($x + $y." is the sum of two variables"."<br>");


// This is the subtraction

$x = 10;  
$y = 6;

 echo ($x - $y." is the subtraction of two variables"."<br>");

//  This is the multiplication


 $x = 10;  
$y = 6;

 echo ($x * $y." is the multiplication of two variables"."<br>");

//  This is the division

 $x = 10;  
$y = 6;

 echo ($x / $y." is the division of two variables"."<br>");

//  This is the modulation


 $x = 10;  
$y = 6;

 echo ($x % $y." is the modulus of two variables"."<br>");

//  This is the exponentiation


 $x = 10;  
$y = 6;

 echo ($x ** $y." is the exponentiation of two variables"."<br>");






<!-- .................PHP Comparison Operators -->



// PHP COMPARISON OPERATORS


// Equal to operator


$x = "200";
$y = 200;
var_dump($x==$y);

// Identical operator

// in identical operator both value of variable and data type should be equal

$x = 200;
$y = 200;
var_dump($x===$y);


// not equal operator

$x = 100;
$y = 200;
var_dump($x!=$y);

// not equal operator

$x = 100;
$y = 200;
var_dump($x<>$y);
// not identical operator

$x = 100;
$y = 200;
var_dump($x!==$y);


// greater than operator

$x = 300;
$y = 200;
var_dump($x>$y);


// less than operator


$x = 300;
$y = 400;
var_dump($x<$y);

// greater than equal operator

$x = 300;
$y = 200;
var_dump($x>=$y);

// less than equal operator


$x = 400;
$y = 400;
var_dump($x<=$y);

// spaceship operator

$x = 10;
$y = 20;
echo ($x<=>$y);

?>