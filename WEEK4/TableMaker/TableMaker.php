<?php

require_once("inc/html.inc.php");
require_once("inc/validation.inc.php");

//Trap the errors
$errors = array();

if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET))   {
    $errors = validate_tableForm();
}

html_header("Table Maker...");

if(!empty($errors))    {
    html_errors($errors);
} else if (!empty($_GET)) {
    html_generate_table();
}

html_tableForm();
html_footer();

