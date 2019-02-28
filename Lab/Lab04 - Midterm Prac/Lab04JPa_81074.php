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
require_once("./inc/config.inc.php");
require_once("./inc/html.inc.php");
require_once("./inc/file.inc.php");
require_once("./inc/roster.inc.php");


$file = getFileContents();
$roster = parseRoster($file);

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['sort'])) {
    // this should be insdie the if-statement below
    switch($_GET['sort']) {
        case 'teamName':
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

htmlHeader();
htmlRoster($roster);
htmlFooter();

?>