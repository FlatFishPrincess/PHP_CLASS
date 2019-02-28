<?php 
    // $unfafeInput = "Doe; Drop table) myTable;";
    // echo "Please enter input"; 
    // $userInput = stream_get_line(STDIN, 1024, PHP_EOL);
    // $trimer = array("(", ")", ",", ".",";");

    // $trimedStr = str_replace($trimer, "", $userInput);
    // echo $trimedStr;


    echo "User Input: ";
    $myInput = get_stream_line(STDIN, 1024, PHP_EOL);
    $trimmer = arr(")", ";", ".", ",", "(");
    echo "Trimmed string: ", str_replace($trimmer, "", $myInput);

?>