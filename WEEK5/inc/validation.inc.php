<?php 
    function validate_uploadForm(){
        
        // Empty Array
        $errors = array();

        if(empty($_FILES)){
            $errors[] = "Please select a file to Upload.";
        }
        return $errors;
    }
?>