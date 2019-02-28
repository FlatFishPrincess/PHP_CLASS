<?php

/*
CSIS 1150 Business Data Communications & Networking 3.0.
CSIS 1155 Hardware Maintenance Concepts 3.0.
CSIS 1175 Introduction to Programming I 3.0.
CSIS 1190 Excel for Business 3.0.
CSIS 1275 Introduction to Programming II 3.0.
*/

$csiscourses = array("CSIS 1150" => "Business Data Communications",
    "CSIS 1275" => "Introduction to Programming II",    
    "CSIS 1155" => "Hardware Maintenance Concepts",
    "CSIS 1190" => "Excel for Business",
    "CSIS 1175" => "Introduction to Programming I"
    );

    //Sort by key
    //ksort($csiscourses);
    //Sort by reverse key
    krsort($csiscourses);

    var_dump($csiscourses);




?>