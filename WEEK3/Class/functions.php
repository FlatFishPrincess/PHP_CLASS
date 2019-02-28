<?php
    function getInput($prompt = "Please type someting: "){
        
        echo $prompt . "\n";
        // Get input from the use
        $input = stream_get_line(STDIN, 2014, PHP_EOL);
        return $input;
    }

    function add($number1, $number2){
        return ($number1 + $number2);
    }

    // echo "Please enter your name: ";
    // $name = getInput("Please enter your name");
    // $name1 = getInput();
    // echo "Hello $name!";
    // echo "Hello $name1!";
    
    // echo add(10,2);

    function getUserInput(& $prompt = "Default prompt"){
        echo $prompt;
        $userInput = stream_get_line(STDIN, 1024, PHP_EOL);
        echo "user input" . $userInput;
    }

    $myPrompty = "Prmopt";
    getUserInput($myPrompty);
    echo "\n without prompt \n";
    getUserInput();
?>