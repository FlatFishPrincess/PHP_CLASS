<?php

class Validation {
    //Validate the input
    public static function validate(): Array   {
        //Initialize and empty array
        $messages = array();
        //Validate all the things
        if(!isset($_POST["username"]) || strlen($_POST["username"]) == 0 ){
            $messages[] = "put valid user name";
        }
        if(!isset($_POST["password"]) || strlen($_POST["password"]) == 0 ){
            $messages[] = "put valid password";
        }
        return $messages;
    }
}