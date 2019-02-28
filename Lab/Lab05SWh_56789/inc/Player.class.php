<?php

class Player {

//Player attributes
// playernum, firstName, lastName, position, bats, throw, age, height, weight, bithPlace
    public $playerNum;
    public $firstName;
    public $lastName;
    public $position;
    public $bats;
    public $throw;
    public $age;
    public $height;
    public $weight;
    public $birthPlace;

    // public function __construct(){}
    //Constructor
    public function __construct($_playerNum,$_firstName,$_lastName, $_position, $_bats, $_throw, $_age, $_height, $_weight, $_birthPlace){
         $this->playerNum = $_playerNum;
         $this->firstName = $_firstName;
         $this->lastName = $_lastName;
         $this->position = $_position;
         $this->bats = $_bats;
         $this->throw = $_throw;
         $this->age = $_age;
         $this->height = $_height;
         $this->weight = $_weight;
         $this->birthPlace = $_birthPlace;
    }

     //toString will print of the player is echoed or printed.
    public function toString(){
        echo  $playerNum . $firstName . $lastName . $position . $bats . $throw . $age . $height . $weight . $birthPlace;
    }
 
}
?>