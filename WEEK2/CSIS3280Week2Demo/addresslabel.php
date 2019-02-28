<?php

/*

John Smith
700 Royal Avenue
New Westminster, BC
V3M 5Z5

*/

//Initialize variables
$fullName = "";
$streetAddress = "";
$city = "";
$prov = "";
$postalCode = "";

echo "Please enter a name: ";
$fullName = stream_get_line(STDIN, 1024, PHP_EOL);

echo "Please enter a street address: ";
$streetAddress = stream_get_line(STDIN, 1024, PHP_EOL);

echo "Please enter a city: ";
$city = stream_get_line(STDIN, 1024, PHP_EOL);

echo "Please enter a province: ";
$prov = stream_get_line(STDIN, 1024, PHP_EOL);

echo "Please enter a postal code: ";
$postalCode = stream_get_line(STDIN, 1024, PHP_EOL);

echo $fullName . "\n" . $streetAddress . "\n" . 
    $city . ',' . $prov . "\n" . $postalCode;



?>
