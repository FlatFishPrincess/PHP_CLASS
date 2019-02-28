<?php

    $toppings = ["Pepperoni", "Mushrooms", "Pineapple", "Olives", "Bell Peppers", "Cheese"];

    array_push($toppings, "Olives");
    $toppings[] = "Bacon";
    // var_dump($toppings);
    sort($toppings);
    // var_dump($toppings);

    // Associative array
    $csiscourses = array("CSIS 1150" => "Business Data Communication & Networking",
        "CSIS 1275" => "Introduction to Programming II 3.0",
        "CSIS 1155" => "Hardware Maintenance Concepts 3.0",
        "CSIS 1190" => "Excel for Business 3.0",
        "CSIS 1275" => "Introduction to Programming II 3.0",
        "CSIS 1175" => "Introduction to Programming");

    // Sort by key
    ksort($csiscourses);    
    // sort by reverse key
    krsort($csiscourses);
    // print_r($csiscourses);

    $myArr = array("BUSN 1100" => "Business 1100",
        "BUSN 1200" => "Business 1200",
        "BUSN 1300" => "Business 1300",
        "BUSN 1400" => "Business 1400",
        "BUSN 1500" => "Business 1500",
        "BUSN 1600" => "Business 1600",
        "BUSN 1700" => "Business 1700");

    ksort($myArr);
    print_r($myArr);
    krsort($myArr);
    print_r($myArr);


?>