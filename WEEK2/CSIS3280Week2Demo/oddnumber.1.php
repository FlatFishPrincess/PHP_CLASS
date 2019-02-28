<?php

$number = 0;
echo "Please enter your number";

$number = stream_get_line(STDIN, 1024, PHP_EOL);
if($number % 2 == 0)
     echo "number even";
else 
     echo "number odd";

?>