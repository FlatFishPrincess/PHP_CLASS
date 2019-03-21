<?php

//Require Files
require_once("inc/html.inc.php");
require_once("inc/validation.inc.php");
require_once("inc/file.inc.php");
require_once("inc/pizza.inc.php");

$errors = validate_uploadForm();

//Draw the header
html_header("CSIS 3280 Week5 Demo");

if (!empty($errors))    {
    html_errors($errors);
}

if (!empty($_FILES) && empty($errors))  {
    //Read in the file that was posted
    $data = read($_FILES["fileToUpload"]["tmp_name"]);
    $pizzaData = parsePizzas($data);
    //var_dump($pizzaData);
    html_pizzaList($pizzaData);

}

//Draw upload form
html_uploadForm();

//Draw the footer
html_footer();

var_dump($_FILES);

?>