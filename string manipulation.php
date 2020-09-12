<?php
 // replacing the substrings
 
    $a = "Nouman is my best friend.Nouman lives in lahore.Nouman is doing job in webevis.";
    echo ($a);
    echo "<br/>";
    echo "<br/>";
   
    echo str_replace ("Nouman","Umer",$a);
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    
    // count number of substrings
    
    $a = "I live in Pakistan.Pakistan is beautiful country.I like Pakistan so much.";
    echo substr_count($a,"Pakistan");
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    
    // finding substring
 
 
 $myString = 'Hello, there!';
if ( strpos( $myString, 'Hello' ) !== false ) {
  echo "Found";
} else {
  echo "Not found";
}

// trim string...

// trim funcion can trim the string from left side and from right side

$a= "Nouman Malik";
echo $a . "<br>";

echo trim($a,"Noik");
echo "<br>";
echo "<br>";

// rtrim string...

//rtrim funcion will only  trim the string from right

$a= "Nouman Malik";
echo $a . "<br>";

echo rtrim($a,"Nk");
echo "<br>";
echo "<br>";


// ltrim string...

//rtrim funcion will only  trim the string from right

$a= "Nouman Malik";
echo $a . "<br>";

echo ltrim($a,"Nk");
echo "<br>";
echo "<br>";



// substr in strings...

// $a = "i love php, i love php too";
// substr(string, start,length);

$a = "Hello world.The world is nice";
echo substr($a, 8,);
echo "<br>";
echo "<br>";
$a = "Hello world.The world is nice";
echo substr($a, -8,);
echo "<br>";
echo "<br>";

// replace only one substring ...


$mystring="Hello world. THe world is so nice";
$str1= substr($mystring,0,11);
 //echo ($str1);
 $str2= substr($mystring,17);
     //echo ($str2);
 $strnew= "This ";
 echo ($str1 . " " . $strnew . $str2);

 echo "<br>";
 echo "<br>";
// 2nd example of above function....

$foo ="Im nouman malik,from lahore.nouman malik and noman malik";
$a = substr ($foo,0,3);
$b = substr($foo, 9);
$new ="usama";
echo $a  . $new . $b;
echo "<br>";
echo "<br>";

//search string functions...

$str = "hello world. The world is so nice";

//echo strstr($str,"world");
echo strstr($str,"world",true);

// find position of string

$a="orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of";
echo strpos($a,"more");

?> 