<?php
//Put all the functions <here class="">

//Function constructor
function getInput($prompt = "Please type something: ") {
    //Prompt the user
    echo $prompt."\n";
    //Get input from the user.
    $input  = stream_get_line(STDIN, 1024, PHP_EOL);
    //Return the value for input.
    return $input;
}

function add($number1, $number2)    {
    return ($number1 + $number2);
}

?>