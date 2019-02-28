<?php
echo "Please enter a first number: ";
$number1 = stream_get_line(STDIN, 1024, PHP_EOL);

if(($number1 % 2) == 0){
    echo "The number is even"; 
} else {
    echo "The number is odd";
}

echo "Please enter a second number";
$number2 = stream_get_line(STDIN, 1024, PHP_EOL);

$sum = $number1 + $number2; 
printf("The sum of the numbers is : %s", $sum); 