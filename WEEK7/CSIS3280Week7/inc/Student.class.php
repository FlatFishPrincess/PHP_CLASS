<?php

class Student extends Person  {

    function __construct(string $fName,string $lName)    {
        $this->firstName = $fName;
        $this->lastName = $lName;
    }

}