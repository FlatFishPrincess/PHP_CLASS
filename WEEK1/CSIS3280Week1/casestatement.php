<?php

echo "Please enter a week day: ";
$weekday = $name = stream_get_line(STDIN, 1024, PHP_EOL);

//echo "Today is $weekday";

switch (strtolower($weekday)) {

    case "friday":
        echo "thank goodness its friday!";
        break;
    
    case "saturday":
    
    case "sunday":
        echo "Have a good weekend!";
    break;

    default:
        echo "Happy $weekday!";
}


?>