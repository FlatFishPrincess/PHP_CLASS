<?php

echo "enter any value \n "; 
$string = stream_get_line(STDIN, 1024, PHP_EOL);

echo gettype($string); 


?>