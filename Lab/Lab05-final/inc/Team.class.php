<?php

class Team  {
    //These are the attributes to store the teamName and the players
    public $teamName = "defaultTeamName";
    public $players = array();
    public $numberOfPlayers = 0;

    //Comparator function by Number
    function compareTo($x, $y){
        if($x->playerNum == $y->playerNum) return 0;
        return ($x->playerNum > $y->playerNum) ? 1 : -1;
    }

    //Function to call the comparator and Sort by Number
    function sortByNumber(){
        $sortedTeam = usort($this->players, array($this, "compareTo"));
        return $sortedTeam;
    }

    function compareLastName($x, $y){
        if($x->lastName == $y->lastName) return 0;
        return ($x->lastName > $y->lastName) ? 1 : -1;
    }

    function sortByLastName(){
        $sortedTeam = usort($this->players, array($this, "compareTo"));
        return $sortedTeam;
    }

    //This function adds a player to the internal array
    function addPlayer($newPlayer){
        $this->players[] = $newPlayer;
        $this->numberOfPlayers++;
    }

    //Returns the count of the players
    function numberOfPlayers(){
        // or count($this->players)
        return $this->numberOfPlayers;
    }
    
    function __toString(){
        $string = "------------header------------" . "\n";
        foreach($this->players as $player){
            $string .= $player->__toString();
        } 
        return $string;
    }
}


?>