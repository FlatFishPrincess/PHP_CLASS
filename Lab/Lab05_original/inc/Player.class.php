<?php

class Player {

//Player attributes
    public $playerNum;
    public $firstName;
    public $lastName;
    public $position;
    public $bats;
    public $throws;
    public $age;
    public $height;
    public $weight;
    public $birthPlace;

    //Constructor
    public function __construct($playerNum, $firstName,$lastName,$position,$bats,$throws,$age,$height,$weight,$birthPlace){
        $this->playerNum = $playerNum;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->position = $position;
        $this->bats = $bats;
        $this->throws = $throws;
        $this->age = $age;
        $this->height = $height;
        $this->weight = $weight;
        $this->birthPlace = $birthPlace;
    }

    public function toString(){
        echo $this->playerNum;
    }
    //toString will print of the player is echoed or printed.


}
?>