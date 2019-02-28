<?php

function html_header($title)  { ?>

<HTML>
<HEAD>
    <TITLE><?php echo $title; ?>
    </TITLE>
</HEAD>
<BODY>
<H1><?php echo $title; ?></H1>

<?php }

function html_footer()  { ?>

</BODY>
</HTML>

<?php }

function html_form()    { ?>
<FORM METHOD="POST" ACTION="<?php echo $_SERVER["PHP_SELF"]; ?>">
<TABLE>
    <TR>
        <TD>
        What is your first name?
        </TD>
        <TD>
        <INPUT TYPE="text" SIZE="15" NAME="fname">
        </TD>
    </TR>
   
    <TR>
        <TD>
        What is your last name?
        </TD>
        <TD>
        <INPUT TYPE="text" SIZE="15" NAME="lname">
        </TD>
    </TR>

    <TR>
        <TD>
        What is your email address?
        </TD>
        <TD>
        <INPUT TYPE="email" SIZE="15" NAME="email">
        </TD>
    </TR>
    
    <TR>
        <TD>
        What is your date of Birth?
        </TD>
        <TD>
        <INPUT TYPE="date" NAME="dob">
        </TD>
    </TR>

    
    <TR>
        <TD>
        What is your Phone number?
        </TD>
        <TD>
        <INPUT TYPE="tel" SIZE="15" NAME="phone">
        </TD>
    </TR>

    
    <TR>
        <TD>
        Please declare a major
        </TD>
        <TD>
        <SELECT NAME="major">

            <OPTION VALUE="none">Select one</OPTION>
        
            <OPTION VALUE="acct">Accounting</OPTION>
                        
            <OPTION VALUE="busn">Business</OPTION>
            
            <OPTION VALUE="csis">Computing Studies and Information Systems</OPTION>

            <OPTION VALUE="econ">Economics</OPTION>
        </SELECT>
        </TD>
    </TR>
</TABLE>
    
<INPUT TYPE="Submit">

</FORM>

<?php }

function html_errors($errors)  { ?>

<DIV STYLE="background-color: #FC0; border-radius: 5px; width:70%;padding: 5px;">
<UL>

<h3>The following errors were found:</h3>

<?php
    foreach ($errors as $error) {
        echo "<LI>".$error."</LI>"."\n";
    }
?>
</UL>
</DIV><BR><BR>

<?php } 

function html_dateform()    { ?>

<FORM METHOD="GET" ACTION= "<?php echo $_SERVER["PHP_SELF"]; ?>">
<INPUT TYPE="date" NAME="date">
<INPUT TYPE="submit" TEXT="Submit!">
</FORM>

<?php } 

function html_dateresult()  {

var_dump($_GET);

$timestamp = strtotime($_GET["date"]);
//$firstDay = mktime(00,00,00,date('m', $timestamp),00,date('Y',$timestamp));
$firstDay = mktime(00,00,00,date('m',$timestamp),01,date('y',$timestamp));
?>

<HR>

The data we got from your form was: <?php echo $_GET["date"]; ?><BR>
The unix time stamp is: <?php echo $timestamp; ?><BR>
The Month is: <?php echo date('m', $timestamp); ?><BR>
The day is: <?php echo date('D', $timestamp); ?><BR>
The year is: <?php echo date('Y', $timestamp); ?><BR>

<HR>
<!-- Have the students get the first day of the month and the total number of days in the month. -->
The full representation of the day of the week is: <?php echo date('l',$firstDay).' the '.date('d',$firstDay).' of '.date("F", $firstDay).', '.date('Y',$firstDay); ?><BR>
The number of the first day of the week: <?php echo date('w', $firstDay); ?><BR>
The textual representation of the first day of the first day of the week: <?php echo date('D', $firstDay); ?><BR> 
The number of days in this month is <?php echo date('t', $timestamp); ?><BR>

<?php } ?>