<?php

//Validate the data straight from POST
function validate_form()   {
    //Store the errors in an array
    $errors = array();

    //Check to see the user entered their first name
    if (strlen($_POST["fname"]) == 0)   {
        $errors[] = "Please enter a first name.";
    }
    //Check to see the user entered their last name
    if (strlen($_POST["lname"]) == 0)   {
        $errors[] = "Please enter a last name.";
    }
    //Check to see the user entered a valid email address
    if (is_null(filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)))   {
        $errors[] = "Please enter a valid email.";
    }
    //Check to see the user entered a valid dob
    
    //Parse the date
    $day = date('d',strtotime($_POST['dob']));
    $month = date('m',strtotime($_POST['dob']));
    $year = date('Y',strtotime($_POST['dob']));

    $filterday = filter_input(INPUT_SERVER,'day',FILTER_VALIDATE_INT,array('min_range' => 1,'max_range' => 31));
    $filtermonth = filter_input(INPUT_SERVER,'month',FILTER_VALIDATE_INT,array('min_range' => 1,'max_range' => 12));
    $filteryear = filter_input(INPUT_SERVER,'year',FILTER_VALIDATE_INT,array('min_range' => 1920,'max_range' => 2019));
    
    if ( $filterday 
        && $filtermonth 
        && $filteryear 
        && checkdate($filtermonth, $filterday, $filteryear)) {

    } else {
        $errors[] = "Please enter a valid date of birth.";
    }

    //Check to see the user entered a valid phone number

    //Check to see the user declared a major.
    if ($_POST["major"] == "none" || empty($_POST["major"]))    {
        $errors[] = "Please enter a valid major.";
    }

    return $errors;

}

?>