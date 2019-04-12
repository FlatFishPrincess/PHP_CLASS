<?php
/*
 * This lab should have the following requirements:
 * POPO - Plain Old PHP Objects (Player Object).
 * File Agent - Utility Class for file operations.
 * Error Handling class - A custom error handline class.
 * HTML form to upload the CSV file. (via the page class)
 */

//Add the required files
require_once('./inc/Player.class.php');
require_once('./inc/Page.class.php');
require_once('./inc/FileAgent.class.php');
require_once('./inc/TeamParser.class.php');
require_once('./inc/Team.class.php');

//Instantiate a new Page Object
$teamPage = new Page("Lab05JPar_82074");

//Display the Page headder
$teamPage->header();
//Check if there were any files ($_FILES_ uploaded, if there were parse them
// midterm
$team = new Team();
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // var_dump($_FILES["fileToUpload"]["tmp_name"]);
    $contents = FileAgent::read($_FILES["fileToUpload"]["tmp_name"]);
    // var_dump($contents);
    $team = TeamParser::parseRoster($contents);
    // var_dump($team);
    //Instantiate a new Team
    // $team = new Team();
    // //Instantiate a new Team Parser
    // $teamParser = new TeamParser();
    // //Load the contents from the File Agent, pass in the tmp_name
    // $contents = FileAgent::read($_FILES["fileToUpload"]["tmp_name"]);
    // $team = $teamParser->parseRoster($contents);

    // //Show pass the entire team to the page class for display
    // $teamPage->showRoster($team);
    $teamPage->showRoster($team);
}  else {
    //Show the upload form
    $teamPage->uploadForm();   
}
// seperate data

//validation    
// if empty($_FILES) && empty(_$POST)
// else if (empty(Validation:validate($_POST)))
// else validate
//Display the page footer
// var_dump($team->toString());
// foreach($team->players as $player){
//     echo $player->toString();
// }
FileAgent::write("data\oriolesSorted.csv", $team->__toString());
$teamPage->footer();
?>
