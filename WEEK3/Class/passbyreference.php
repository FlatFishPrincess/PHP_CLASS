<?php
    // & means pass by reference
    function hello(& $name){
        echo "Hello $name \n";
        // $name= "John";
    }

    $name = "Sam";
    hello($name);
    echo "\n" . $name . " right?";
?>