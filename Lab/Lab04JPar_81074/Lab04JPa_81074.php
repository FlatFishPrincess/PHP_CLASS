<?php

/**
 * Student Name:            Jiweon Park
 * Student Number:          300281074
 * Assignment/File Name:    Lab04
 * 
 * Description: 
 * 
 * This portion describes the File/Assignment
 * 
 * References:
 * 
 * This portiion is for any references you ror your assignment 
 * please make sure you provide the appropriate url references
 * or any comment for example if you referenced some help you
 * received from your instructor or some demo code provided in
 * class.
 * 
 * STOP!!! 
 * Did you follow the Assignment Submission Guidlines?
 * Did you double check your submission runs in anohter directory or on another computer?
 *  
 *      
**/


//Require Files
require_once("inc/roster.inc.php");
require_once("inc/file.inc.php");
require_once("inc/config.inc.php");
require_once("inc/html.inc.php");

//Get the file contents
$fileContents = getFileContents(); // from file.inc.php // if fail to get file, die
// //Parse the file contents
$roster = parseRoster($fileContents);

if(!isset($_GET['sort'])) {
    $_GET['sort'] = 'team';
}

// If the request method was get and "sort" issset
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['sort'])) {

    // this should be insdie the if-statement below
    switch($_GET['sort']) {
        case 'team':
            sortbyName($roster);
            break;
        case 'win':
            $roster = sortbyWins($roster);
            // var_dump($roster);
            break;
        case 'payroll':
            $roster =sortbyPayroll($roster);
            // var_dump($roster);
            break;
        default:
            $roster =sortbyName($roster);
            // var_dump($roster);
    }
}

//Html header
htmlHeader();

//Print the roster
htmlRoster($roster);

//Html footer
htmlFooter();

?>