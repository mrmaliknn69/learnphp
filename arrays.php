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

// foreach loop through index array..


$cars = array("Volvo", "BMW", "Toyota");

foreach($cars as $value) {
  echo $value;
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

// another example of loop through an associative  arrays

$numbers = array("Noman"=>"25","Omer"=>"23","Usman"=>"22");

foreach ($numbers as $x=>$value) {
	echo  $x. "=" .$value."<br>" ;

}


// Multidimensional arrays

// Arrays containing one or more arrays

$data =array (
	array("Nouman",25,"60kg"),
	array("Omer",23,"50kg"),
	array("Usman",20,"55kg")

);

echo "My name is: ". $data[0][0]. ", im ". $data[0][1]." year old. And i have ".$data[0][2]." weight <br>";
echo "My name is: ". $data[1][0]. ", im ". $data[1][1]." year old. And i have ".$data[1][2]." weight <br>";
echo "My name is: ". $data[2][0]. ", im ". $data[2][1]." year old. And i have ".$data[2][2]." weight <br>";


// another Multidimensional arrays


$fruits = array(
	array("bnana","22","23"),
	array("apple","24","25"),
	array("mango","26","27")
);

echo $fruits[0][0] . " In stock: " . $fruits[0][1] . ", sold " .$fruits[0][2] . ".<br>";
echo $fruits[1][0] . " In stock: " . $fruits[1][1] . ", sold " .$fruits[1][2] . ".<br>";
echo $fruits[2][0] . " In stock: " . $fruits[2][1] . ", sold " .$fruits[2][2] . ".";

// loop inside loop through Multidimensional arrays

$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
      
  for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
  }













?>
