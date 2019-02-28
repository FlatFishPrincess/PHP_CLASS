<?php

require_once("inc/html.inc.php");
require_once("inc/validation.inc.php");

html_header("CSIS Week4Demo - Dates");
if (!empty($errors))    {
    html_errors($errors);
}
html_dateform();

if ($_SERVER["REQUEST_METHOD"] == "GET" && $_GET["date"])   {
    html_dateresult();
}

html_footer();

/*
    What is your fist name, last name, email
    date of birh, phone numer, major, 
*/

?>

