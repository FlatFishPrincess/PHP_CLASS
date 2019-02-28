<?php

//Initialize Variables
$name = "";

echo "Please enter your name:";
$name = stream_get_line(STDIN, 1024, PHPEOL);
echo "Hello $name!";


?>