<?php
/*
JIWEON PARK
13767 Grosvenor Rd
Surrey, BC 
V3R 5E5 
*/ 

// Initialize variables 
$fullName = "";
$streetAddress = "";
$city = "";
$prov = "";
$postalCode = ""; 


echo "Please enter a fullName: ";
$fullName = stream_get_line(STDIN, 1024, PHP_EOL);

echo "Please enter a streetAddress: ";
$streetAddress = stream_get_line(STDIN, 1024, PHP_EOL);

echo "Please enter a city: ";
$city = stream_get_line(STDIN, 1024, PHP_EOL);

echo "Please enter a province: ";
$prov = stream_get_line(STDIN, 1024, PHP_EOL);

echo "Please enter a postalCode number: ";
$postalCode = stream_get_line(STDIN, 1024, PHP_EOL);

echo $fullName . "\n" . $streetAddress . "\n" . $city . "\n" . $prov . "\n" . $postalCode . "\n"; 
?> 