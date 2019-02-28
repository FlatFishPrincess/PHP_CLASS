<?php

require_once('inc/calendar.inc.php');
require_once('inc/validation.inc.php');
require_once('inc/html.inc.php');

//Check to see if there was information posted via the server
if ($_SERVER["REQUEST_METHOD"] == "POST")	{

	$errors = validate_CalendarForm();
	//If there are no errors...
	if (empty($errors))	{
		//Get the calendar data and print it
		// month and year 
		$month = $_POST['month'];
		$year = $_POST["year"];
		// $data = getCalendarData($month,$year);
		// html_Calendar($data);
		html_Calendar($_POST);
	} else {
		//Otherwise print the errors
		html_errors($errors);
		//And present the form.
		html_CalendarForm();
	}
} else {
	//Or if there was no POST data it means the user hasnt submitted anything, just pint the calendar form.
	html_CalendarForm();
}

?>
