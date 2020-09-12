<?php


// swapiing concept


$a = 45;  
$b = 78;  
// Swapping Logic  
$c=$a;
$a=$b;
$b=$c;
echo "After swapping:<br><br>";  
echo "a =".$a."  b=".$b;  

echo "<br>";
echo "<br>";
echo "<br>";


$a=234;  
$b=345;  
//using arithmetic operation  
$a=$a+$b;  
$b=$a-$b;  
$a=$a-$b;  
echo "Value of a: $a</br>";  
echo "Value of b: $b</br>";
echo "<br>";
echo "<br>";
echo "<br>";

// array sorting

$a  = array(8,2 ,5 ,7,9,3,4,6,1);

echo "<pre>";
sort($a);
print_r($a);
echo "</pre>";
echo "<br>";
echo "<br>";
echo "<br>";
  
?>