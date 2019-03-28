<?php

require_once("inc/config.inc.php");

require_once("inc/Entities/User.class.php");

require_once("inc/Utility/Page.class.php");
require_once("inc/Utility/PDOAgent.class.php");
require_once("inc/Utility/UserMapper.class.php");
require_once("inc/Utility/LoginManager.class.php");

LoginManager::verifyLogin();

UserMapper::initialize("User");
$users = UserMapper::listUsers();

//Update all the passwords to the username
foreach  ($users as $user)  {
    $user->setPassword($user->getUsername());
    UserMapper::updateUser($user);
}

Page::$title = "Lab 09 - JPa_81074";
Page::header();
Page::welcome();
Page::footer();