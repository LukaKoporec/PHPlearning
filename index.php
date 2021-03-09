<?php
//$vartest
     //$myVar1 = "Hello";
     //$myVar2 = "World";

     //echo $myVar1."   ".$myVar2;

     //$arrayName = array('' => , );
     //$numbers = array(12,45,22,34,65);
     //$numbers = [12,45,22,34,65];

//print_r($numbers);
//echo $numbers[1];

$ages = array(
"John" => 35,
"Mary" => 27,
"Bob" => 55
);

//echo $ages["Mary"];

array_pop($ages); //get rid of Bob
array_shift($ages); //get rid of John

print_r($ages);

?>
