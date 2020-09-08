<?php

// index arrays


// these arrays are with the numeric index


$fruits = array('bnana','apple','mango');
echo "i would like to eat " . $fruits[0] . " , " . $fruits[1] . " and " . $fruits[2] . ".";



// loop through an index array



$fruits = array('bnana','apple','mango');
$arrlength = count($fruits);

for($x = 0; $x < $arrlength; $x++) {
  echo $fruits[$x];
  echo "<br>";
}


// associative arrays

// these are with the named keys

$color = array("bnana"=>"yellow","apple"=>"green","mango"=>"lghtyellow");
 echo "apple has " . $color['apple'] . " color.";



// loop through an associative  arrays

$color = array("bnana"=>"yellow","apple"=>"green","mango"=>"lghtyellow");


foreach($color as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}




// Multidimensional arrays

// Arrays containing one or more arrays


$fruits = array(
	array("bnana","22","23"),
	array("apple","24","25"),
	array("mango","26","27")
);

echo $fruits[0][0] . " In stock: " . $fruits[0][1] . ", sold " .$fruits[0][2] . ".<br>";
echo $fruits[1][0] . " In stock: " . $fruits[1][1] . ", sold " .$fruits[1][2] . ".<br>";
echo $fruits[2][0] . " In stock: " . $fruits[2][1] . ", sold " .$fruits[2][2] . ".";















?>
