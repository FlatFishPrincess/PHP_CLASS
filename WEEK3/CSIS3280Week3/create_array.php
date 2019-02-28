<?php

/* 
    Pepperoni
    Mushrooms
    Pineapple
    Olives
    Bell Peppers
    Cheese
*/
//Declare a blank array
$toppings = array();

//Declare an indexed array
$toppings = ["Pepperoni","Mushrooms","Pineapple"];

array_push($toppings,"Olives");
$toppings[] = "Bell Peppers";
$toppings[] = "Cheese";
var_dump($toppings);



//echo $toppings[2];


?>