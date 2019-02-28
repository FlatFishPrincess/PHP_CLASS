<?php
    // import fil
    require_once("inc/courses.inc.php");
    require_once("inc/numbers.inc.php");

    // $numbers = array(3,5,5,76,8,3,25,34,4,6,7,100);
    // usort($numbers, "cmp_numbers");
    // // var_dump($numbers);
    // print_r($numbers);

    $csiscourses = array("CSIS 1150" => "Business Data Communication & Networking",
        "CSIS 1275" => "Introduction to Programming II 3.0",
        "CSIS 1155" => "Hardware Maintenance Concepts 3.0",
        "CSIS 1190" => "Excel for Business 3.0",
        "CSIS 1275" => "Introduction to Programming II 3.0",
        "CSIS 1175" => "Introduction to Programming");

    print_r($csiscourses);
    // usort(array,myfunction);
    // The usort() function sorts an array using a user-defined comparison function.
    usort($csiscourses, 'cmp_courses');
    // var_dump($csiscourses);    
    // print_r($csiscourses);
?>