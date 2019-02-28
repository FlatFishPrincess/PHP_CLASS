<?php
//  Write a Program prompts the user to print out a shipping label that prints out a shipping label in the
//  following format:

//     John Smith
// 700 Royal Avenue
// New Westminster, BC
// V3M 5Z5
    function getUserInput($prompt = "Please enter your input"){
        echo $prompt;
        $input = stream_get_line(STDIN, 1024, PHP_EOL);
        return $input . "\n";
    }

    // getUserInput("What's your name?");
    // getUserInput("Address: ");
    // getUserInput("Cirt and province: ");
    // getUserInput("Post code: ");

    echo getUserInput("What's your name?") .  getUserInput("Address: ") .  getUserInput("Cirt and province: ") . getUserInput("Post code: ")

?>