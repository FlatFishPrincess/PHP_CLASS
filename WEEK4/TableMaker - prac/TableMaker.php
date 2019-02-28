<?php

require_once("inc/html.inc.php");
require_once("inc/validation.inc.php");

$errors = array();

if($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET)){
    $errors = validate_tableForm();
    // var_dump($_GET);
    if(!empty($errors)){
        html_errors($errors);
    } 
    html_generate_table($_GET);
} else {
    html_tableForm();
}
html_footer();

