<?php


// while loop



$x = 1;

while($x <= 10 {
  echo "The number is: $x <br>";
  $x++;
}


// do while loop


$x=8;
do {
    echo"the number is : $x <br> ";
    $x++;
}

while($x<=5);


// for loop



for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
  }
  


// foreach loop


  $colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $value) {
  echo "$value <br>";
}


// Break and Continue


for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      break;
    }
    echo "The number is: $x <br>";
  }
  ?>
?>