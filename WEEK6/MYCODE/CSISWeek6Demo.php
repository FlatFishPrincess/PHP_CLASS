<?php 
// make sure constant is always at the top
    require_once("inc/config.inc.php");
    require_once("inc/Page.class.php");
    require_once("inc/FileAgent.class.php");
    require_once("inc/Mobile.class.php");
    require_once("inc/MobileParser.class.php");
    // call static function syntax
    // className:: functionName(); 

    // user posted data
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        FileAgent::write($_POST);
    }

    $contents = FileAgent::read();
    // FileAgent::write("\nIphone, Qualcomm, Slate, 2, Coral");
    MobileParser::parseMobiles($contents);

    Page::$title = "CSIS 3280 Week 6 Demo";
    Page::header();
    
    // New Mobile class
    // $m = new Mobile("Blackberry", "Exynos", "Flip", 512, "purple");
    // // call powerOn function which is not static
    // $m->powerOn(); 
    // $m->powerOff(); 

    // var_dump($contents);
    // var_dump(MobileParser::$mobiles);

    Page::mobileAddForm();
    Page::footer();

?>