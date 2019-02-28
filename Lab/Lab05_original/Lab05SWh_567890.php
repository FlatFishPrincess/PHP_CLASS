<?php
/*
 * This lab should have the following requirements:
 * POPO - Plain Old PHP Objects (Player Object).
 * File Agent - Utility Class for file operations.
 * Error Handling class - A custom error handline class.
 * HTML form to upload the CSV file. (via the page class)
 */

//Add the required files
require_once("./inc/Page.class.php");
require_once("./inc/FileAgent.class.php");
require_once("./inc/Team.class.php");
require_once("./inc/Player.class.php");
require_once("./inc/TeamParser.class.php");
//Instantiate a new Page Object

$page = new Page("Lab Practice");

//Display the Page headder
$page->header();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // read file
    $file = FileAgent::read($_FILES["fileToUpload"]["tmp_name"]);
    $teamParser = new TeamParser();
    $team = $teamParser->parseRoster($file);
    $page->showRoster($team);
} else {
    $page->uploadForm();
}

$page->footer();

?>
