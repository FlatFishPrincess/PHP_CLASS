<?php 
// should be first ! 
require_once("inc/config.inc.php");
require_once("inc/Page.class.php");
require_once("inc/FileAgent.class.php");
require_once("inc/Mobile.class.php");
require_once("inc/MobileParser.class.php");


//If there was post data then lets process it
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    //Write the entry to $_POST
    FileAgent::write($_POST);
}

$fileContents = FileAgent::read();
MobileParser::parseMobiles($fileContents);
//FileAgent::write("\nIPhone, Qualcomm, Slate, 2,corla");

// initiate public var $title 
Page::$title = "CSIS 3280 Week 6 Demo";
// how to call function? class name :: function name();
Page::header();

// $m = new Mobile("Blackberry", "Exynos", "Flip", 512 , "purple");
// $m->powerOn();
// $m->pwoerOff();
//var_dump(MobileParser::$mobiles);
Page::listMobiles(MobileParser::$mobiles);

Page::mobileAddForm();
Page::footer();

?>