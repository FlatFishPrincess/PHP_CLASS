<?php

//Initialize Variables
$name = "";

echo "Please enter your name:";
$name = stream_get_line(STDIN, 1024, PHP_EOL);
echo "Hello $name!";


?>