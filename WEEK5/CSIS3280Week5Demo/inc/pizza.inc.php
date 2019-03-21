<?php

function parsePizzas($fileContents) {

    //A blank array to store pizzas
    $pizzas = array();

    //Return an array of elements line by line
    $lines = explode("\n", $fileContents);

    for ($x = 1; $x < count($lines); $x++)  {
        //Explode the line of the CSV by comma
        $columns = explode(",",$lines[$x]);

        try {
            //Count the columns,
            //If they are not five... throw an exception
            if (count($columns) != 5)   {
                throw new Exception("Invalid number of columns on line: ".($x + 1));
            } else {
                //If they were five then add them to the array to return.
                $pizzas[] = $columns;
            }
        } catch (Exception $pe) {
                html_errors(array($pe->getMessage()));    
        }

    }

    //Make sure your returns statement is at the end of your function
    return $pizzas;

}
