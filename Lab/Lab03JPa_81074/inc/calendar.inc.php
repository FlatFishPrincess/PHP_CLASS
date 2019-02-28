<?php

//This function will return a datastructure indicating the entrires for each day, the current day, the start of the month as well as end of the month in a single array. 
// This information will be passed to an html function
// Generates a single array of data containing all the information for the calendar.
function getCalendarData($month = 05,$year = 2018 )	{

//Create a timestamp based on the parameters for getCalendarData
$ts = mktime(0,0,0,$month,1,$year);
$calendarData = array();
//We have to set the counter to 1 and not zero because calendar days start at 1.
$counter = 1;

//Important Days
//First Day of the Month
$firstDay = (int)date('w', $ts);
//Last Day of the Month
$lastDay = cal_days_in_month(CAL_GREGORIAN, $month, $year);
	//Iterate through the grid (7 x 5)
	//For each row
	//For each column
	//Start counting the days if the $counter is greater than the first day, 
	//continue on until the counter is less than or equal to the last day + the first day 
	//(which would mean the number of days in the month has been reached.)


	// get the first day and last day 
	// if not inside first day and last day, put null 
		// Iterate grid  (6 x 7)
		// if(counter > firstday && counter <= lastday + firstDay){
		// 	calendarData[] = counter - firstDay 
		// } else {
		// 	calendarData[] = null;
		// }
		// counter++;


	//Append the current month and year to the array
	$calendarData["month"] = date('F',$ts);
	$calendarData["year"] = date('Y',$ts);
	var_dump($calendarData);
	
	return $calendarData;
}

?>
