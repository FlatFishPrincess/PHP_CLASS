<?php

//     John Smith
// 700 Royal Avenue
// New Westminster, BC
// V3M 5Z5
    function getUserInput($prompt = "Please enter your input"){
        echo $prompt;
        $input = stream_get_line(STDIN, 1024, PHP_EOL);
        return $input . "\n";
    }

?>
