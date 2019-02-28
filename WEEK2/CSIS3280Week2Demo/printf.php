<?php

// echo "Please enter a first number: ";
// $number1 = stream_get_line(STDIN, 1024, PHP_EOL);

// echo "Please enter a second number: ";
// $number2 = stream_get_line(STDIN, 1024, PHP_EOL);
// $sum = ($number1 + $number2);

// printf("The sum of the numbers is: %s",$sum);

echo "First number";
$first = stream_get_line(STDIN, 1024, PHP_EOL);

echo "Second number";
$second = stream_get_line(STDIN, 1024, PHP_EOL);

printf("The sume of %s", $first + $second);
?>