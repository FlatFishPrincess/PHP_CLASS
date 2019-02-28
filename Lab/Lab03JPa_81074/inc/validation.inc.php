<?php

//Read in post to validate form data
function validate_CalendarForm() {
    
    //Store the errors
    $errors = array();

    //Valid months to check against.
    //Check the month was selected
    if (empty($_POST['month']) || ($_POST['month']) == "Month")    {
        $errors[] = "Please enter a valid month.";
    }
    //Check the year was selected
    if (empty($_POST['year']) || ($_POST['year']) == "Year")    {
        $errors[] = "Please enter a valid year.";
    }

    /*
    instructor did below
    $validMonth = array( "all months array ");
    if(strstr(implode(" ", $validMonth), $_POST["month"]))
        $errors[] = "Please enter a valid year.";

    if(!is_numeric($_POST["year"]) && strlen($_POST["year"]) != 4)
        $errors[] = "Please enter a valid year.";
    */


    
    //Check if the checkbox was selected
    if (isset($_POST['eventCheck'])) {
        //Check the Day is within the month
        $daysNumber = cal_days_in_month(CAL_GREGORIAN, $_POST['month'],  $_POST['year']);
        $eventDate = $_POST["eventDate"];
        if (!is_numeric($eventDate) ||  0 > $eventDate || $eventDate >= $daysNumber)  {
            $errors[] = "Please enter a valid day for the month you have selected";
        }
        if (strlen($_POST["eventDate"]) == 0)    {
            $errors[] = "Please enter a day for your special event.";
        }
        //Check the Description was entered
        if (strlen($_POST["description"]) == 0) {
            $errors[] = "Please enter a description";
        }
        //Check a color was selected
        if (!isset($_POST['color']) || ($_POST['color']) == "none")  {
            $errors[] = "Please select a color";
        }
    }
    return $errors;
}
        

?>