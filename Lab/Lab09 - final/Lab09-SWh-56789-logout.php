<?php

//Include the page and the login manager
require("inc/Utility/Page.class.php");
require("inc/Utility/LoginManager.class.php");

//Verify if the user is logged in
if (LoginManager::verifyLogin())    {
    //Call the Page goodbye
    Page::$title = "Good Bye.";
    Page::header("logoff");
    Page::goodBye();
    Page::footer();
} else {
    //Unset the session or destroy the session
    unset($_SESSION);
}


?>