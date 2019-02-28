<?php

function validate_tableForm()   {

    //BlankErrors
    $errors = array();

    
    if (!is_numeric($_GET["width"]))   {
        $errors[] = "Please enter a width.";
    }
    if (!is_numeric($_GET["height"]))  {
        $errors[] = "Please enter a height.";
    }
    if (!is_numeric($_GET["marker"]) ||$_GET["marker"] > ($_GET["width"] * $_GET["height"]))   {
        $errors[] = "Please enter a valid marker.";
    }

    return $errors;
}

?>