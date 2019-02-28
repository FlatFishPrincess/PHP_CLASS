<?php

require_once("inc/html.inc.php");
require_once("inc/validation.inc.php");

//If the user posted data, validate it.
if ($_SERVER["REQUEST_METHOD"] == "POST")   {
    $errors = validate_form();
}
html_header("CSIS Week4Demo");
if (!empty($errors))    {
    html_errors($errors);
}
html_form();
html_footer();

/*
    What is your fist name, last name, email
    date of birh, phone numer, major, 
*/

?>

