<?php

class Team  {

    //These are the attributes to store the teamName and the players
    public $teamName;
    public $players;

    //Comparator function by Number
    public function __construct($teamName){
        $this->teamName = $teamName;
    }

    private function compareToNum($x, $y){
        if($x->playerNum == $y->playerNum) return 0;
        return ($x->playerNum > $y->playerNum) ? 1 : -1;
    }
    //Function to call the comparator and Sort by Number
    public function sortByNum(){
        $sortedArr = usort($this->players, array($this, "compareToNum"));
        return $sortedArr;
    }
    public function sortByLastName(){
        $sortedArr = usort($this->players, array($this, "compareToLastName"));
        return $sortedArr;
    }
    private function compareToLastName($x, $y){
        if($x->lastName == $y->lastName) return 0;
        return ($x->lastName > $y->lastName) ? 1 : -1;
    }

    //This function adds a player to the internal array
    public function addPlayer($player){
        $this->players[] = $player;
    }

    //Returns the count of the players
    public function getCount(){
        return count($this->players);
    }

}

?>