<?php 
    class Person {

        public $firstName = "";
        public $lastName = "";
        public $isSleeping;
        public $age = 0;
        public $gender;


        public function sleep(){

        }
        
        public function wakeUp(){

        }

        public function setAge(int $age){
            $this->age =$age;
        }

        // specify return type
        public function __toString() : string{
            $output = "<b>Student</b><br />";
            $output .=  "Firstname: :" . $this->firstName . "<br />";
            $output .=  "Lastname: :" . $this->lastName . "<br />";
            $output .=  "gender: :" .  ($this->gender ?? "Not specified") . "<br />";
                                        // here, ?? operator check if value is null
            return $output;
        }
        
    }
?> 