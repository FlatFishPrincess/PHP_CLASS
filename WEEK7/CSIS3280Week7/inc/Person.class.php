<?php

class Person   {

    public $firstName = "";
    public $lastName = "";
    public $isSleeping;
    public $age = 0;
    public $gender;

    public function sleep() {

    }

    public function  wakeup()   {

    }

    public function setAge(int $age) {
        $this->age = $age;
    }

    public function __toString() : string    {
        $output = "<B>Student</B><BR>";
        $output .= "Firstname: " . $this->firstName. "<BR>";
        $output .= "LastName: " . $this->lastName. "<BR>";
        $output .= "gender: " .  ($this->gender ?? "Not Specified"). "<BR>";
        

        return $output;
    }


}