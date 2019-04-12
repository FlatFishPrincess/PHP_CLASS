<?php 
    Class Validation {

        public static $errors;

        public static function validateInput(){
            if(strlen($_POST['isbn']) == 0){
                self::$errors[] = "Invalid isbn";
            }
            if(strlen($_POST['title']) == 0){
                self::$errors[] = "Invalid title";
            }
            if(strlen($_POST['author']) == 0){
                self::$errors[] = "Invalid author";
            }
            if(strlen($_POST['price']) == 0 || !is_numeric($_POST['price'])){
                self::$errors[] = "Invalid price";
            }
        }
        
    }


?>