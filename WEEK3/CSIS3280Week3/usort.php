<?php
require_once("inc/courses.inc.php");
require_once("inc/numbers.inc.php");

$numbers = array(3,5,5,76,8,5,434,3,3,45,6,76);

usort($numbers,'cmp_numbers');

var_dump($numbers);

/*
$csiscourses = array("CSIS 1150" => "Business Data Communications",
    "CSIS 1275" => "Introduction to Programming II",    
    "CSIS 1155" => "Hardware Maintenance Concepts",
    "CSIS 1190" => "Excel for Business",
    "CSIS 1175" => "Introduction to Programming I"
    );

usort($csiscourses, 'cmp_courses');

var_dump($csiscourses);
*/
?>