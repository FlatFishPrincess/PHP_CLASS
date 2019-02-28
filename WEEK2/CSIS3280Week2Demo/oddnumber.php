<?php

echo "Please enter a number: ";
$number1 = stream_get_line(STDIN, 1024, PHP_EOL);

if (($number1 % 2 ) == 0) {
    echo "The number is even.";
} else {
    echo "The number is odd.";
}



?>