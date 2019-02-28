<?php

//This funciton will print out a calendar form allowing the user to select the month from a drop down and a year from the drop down menu.
function html_CalendarForm()	{ ?>
	<H1>Lab 03 - HTML Calendar - JPa_81074</H1>
	<HR>
	<FORM METHOD="POST" >
	<TABLE>
		<TR>
			<TD>
			Month: <SELECT NAME="month">
				<!-- Generate all the dates using a for loop and mktime and date -->
					<?php 
						$months = array();
						for ($i = 0; $i < 13; $i++) {
							if($i == 0){
								$months[$i] = "Month";
							} else {
								$months[$i] = date('F', mktime(0, 0, 0, $i,1));
							}
						}
						foreach ($months as $num => $name) {
							printf('<option value="%u">%s</option>', $num, $name);
						}
					?>
			</SELECT>
			</TD>
		</TR>
		<TR>
			<TD>
			Year: <SELECT NAME="year">
			<!-- Generate the last 10 years... -->
			<?php 
				$years = array();
				$currentYear = date("Y");
				for($i = $currentYear - 11; $i<$currentYear; $i++){
					if($i ==  $currentYear - 11){
						$years[$i] = "Year";
					} else {
						$years[$i] = $i;
					}
				}
				foreach($years as $year){
					printf('<option value="%u">%u</option>', $year, $year);
				}
			?>
			</SELECT>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=2>
			<BR>
			<!-- Checkbox here -->
				<input type="checkbox" name="eventCheck">
				Mark a special event
			<!-- isset($_POST['test']) -->
			</TD>
		</TR>
		<TR>
			<TD>
			Special Event Day <!-- Text input here -->
			</TD>
			<TD>
				<input type="input" name="eventDate">
			</TD>
		</TR>
		<TR>
			<TD>Description<BR>
				<input type="textarea" name="description">
			<!-- TextArea here... -->
			</TD>
		</TR>
		<TR>
			<TD>
			Please selct a color.<BR>
			<SELECT NAME="color">
			<!-- Pick whatever colors you want, just dont make them ugly. (hint pastel or light colors on a white background work best. -->
				<option value="none">select color</option>
				<option value="#dbffbc">Green</option>
				<option value="#fcd4e5">Pink</option>
			</SELECT>
			</TD>
		</TR>
	</TABLE>
	<INPUT TYPE="Submit" TEXT="Create Calendar!">
	</FORM>

<?php }


//This function shows errors in an a div using an unorderd list
function html_errors($errors)	{ ?>
	<DIV style="">
	
	<UL>
	<?php	foreach($errors as $error)	{
		echo "<LI>$error</LI>";
		} ?>
	</UL>
	</DIV>
<?php }

//This funciton will take the data array and display the calendar
function html_Calendar($data)	{

	// var_dump($data);

	// get month and year then get days.
	$month = $data["month"];
	$year = $data["year"];
	$eventDay = $data["eventDate"];
	$bgColor = $data["color"];
	$description = $data["description"];
	$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
	$timeStamp = mktime(0,0,0,$month,1,$year);
	$firstDay = (int)date('w', $timeStamp);
	// //Array containing the days of the week.
	$daysOfTheWeek = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
	//Counter
	$counter = 0;
	//Begin calendar by printing the headerO
	echo '<TABLE WIDTH="80%" HEIGHT="60%" BORDER=1>';
	//Print the month and year of the Calendar (Title in the top)
	echo '<TR><TD COLSPAN=7><H1>'. $year. ' - '. date('F', $timeStamp) . ' - Lab03JPa_81074</H1></TD></TR>';
	echo '<TR>';
	//Go through all the days of the week.
	for($i = 0; $i<sizeof($daysOfTheWeek); $i++){
		echo "<TD>". $daysOfTheWeek[$i]. "</TD>";
	}
	echo '</TR>';
	
	//Iterate through the array and print out the boxes
	for ($x = 0; $x < 6; $x++)	{
		//Row here
		echo '<TR>';
		for ($y = 0; $y < 7; $y++)	{
			// check the first day 
			//(if first day is 7, counter starts 1, until daysInMonth
			// else, display gray until the first day, then start counter

			if($firstDay == 0){
				$currentDay = $counter + 1;
				if($currentDay > $daysInMonth){
					echo '<TD BGCOLOR="#DDD">&nbsp</TD>';
				} else {
					echo '<TD>' . $currentDay  . '</TD>';
					if($eventDay == $currentDay)
						echo '<TD BGCOLOR=' . $bgColor . '>'. $currentDay. ' - ' . $description .  '</TD>';
				}
			} else {
				if($firstDay  > $counter || $counter > $daysInMonth){
					echo '<TD BGCOLOR="#DDD">' .$counter . '</TD>';
				} else {
					if($eventDay == $counter)
						echo '<TD BGCOLOR=' . $bgColor . '>'. $counter. ' - ' . $description .  '</TD>';
					else 
						echo '<TD>' . $counter  . '</TD>';
				}
			}

			/*
				if(is_null($data[$counter])){
					echo '<TD BGCOLOR="#DDD">&nbsp</TD>';
				} else {
					if(isset($_POST["event]) && $counter == eventday + 1)
						display event day
					else 
						display date using counter 

				}
			*/
			$counter++;
		}
			echo '</TR>';
	}
		
	echo '</TABLE>';
}
?>
