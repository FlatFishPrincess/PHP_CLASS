<?php

$toppings = ["Pepperoni","Mushrooms","Pineapple"];

asort($toppings);

array_push($toppings, "cheese");

var_dump($toppings);

$associateArr = array("cheese" => "Blue cheese",
    "protein" => "Pepperoni",
    "fruit" => "Pineapple");
ksort($associateArr);
print_r($associateArr);

?>