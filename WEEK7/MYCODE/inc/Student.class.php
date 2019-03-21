<?php 
    class Student extends Person {

        function __construct(string $fname, string $lname){
            $this->firstName = $fname;
            $this->lastName = $lname;
        }

    }
?>