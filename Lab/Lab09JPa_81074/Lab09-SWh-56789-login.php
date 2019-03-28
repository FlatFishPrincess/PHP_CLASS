<?php

//Require the config
//Require entities
//Require Utilities

require_once("inc/config.inc.php");
require_once("inc/Entities/User.class.php");
require_once("inc/Utility/Page.class.php");
require_once("inc/Utility/PDOAgent.class.php");
require_once("inc/Utility/UserMapper.class.php");
require_once("inc/Utility/LoginManager.class.php");
require_once("inc/Utility/Validation.class.php");
//If they not continue
//Check the login
if (!empty($_POST) )  {
    
    //Initialize the user mapper
    UserMapper::initialize("User");
    
    //Check the validation
    $errors = Validation::validate();
    if(empty($errors)){
        //Get the user by username (because thats all we have in the form)
        //Check the mapper returned an object and the object is a user (in case the username is invalid)
        $user = UserMapper::getUserbyName($_POST["username"]);
        //Verify that users password against the password in the form
        if ($user->verifyPassword($_POST["password"]))  {
            //If trueg them in by starting a sesssion and forwarding them to the main page
            session_start();
            //Set the logged in to true
            $_SESSION['loggedin'] = $user;
            //Send the user to the user managment page
            header('Location: Lab09-SWh-56789-welcome.php');
        } else {
            $errors[] = "Invalid password!";
        }
    }
   
}

//Show the page
//Set title
Page::$title = "Lab 09 - JPa_81074";
//header
Page::header();

if(!empty($errors)){
    Page::displayErrors($errors);
}
//showLogin
Page::showLogin();
//footer
Page::footer();