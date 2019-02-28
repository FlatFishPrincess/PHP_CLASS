<?php

function hello(& $name)   {
    echo "Hello $name";
    $name = "John";
}

$name = "Sam";

hello($name);
echo "\n". $name . " right?"

?>
