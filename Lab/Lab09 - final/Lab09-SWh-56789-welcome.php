<?php

require_once("inc/config.inc.php");

require_once("inc/Entities/User.class.php");

require_once("inc/Utility/Page.class.php");
require_once("inc/Utility/PDOAgent.class.php");
require_once("inc/Utility/UserMapper.class.php");
require_once("inc/Utility/LoginManager.class.php");

if(!LoginManager::verifyLogin()){
    header('Location: Lab09-SWh-56789-login.php');
}

Page::$title = "Lab 09 - JPa_81074";
Page::header();
$currentUser = $_SESSION['loggedin'];
Page::welcome($currentUser);
Page::footer();