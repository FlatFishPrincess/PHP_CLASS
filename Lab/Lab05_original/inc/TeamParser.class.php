<?php

class TeamParser {

    //The team tha the Team parser will use
    private $team = null;

    //This function will parse our cars data to an array
 function parseRoster($fileContents)   {

    //Instantiate a new team
    $this->team = new Team("team name");
    //create an array out of each line of the file (split by newline character)
    // var_dump($fileContents);
    $linesArr = explode("\n", $fileContents);
    // print_r($linesArr);
    for($i = 1; $i<count($linesArr); $i++){
        $columns = explode(",", $linesArr[$i]);
        $player;
        try{
            for($j = 0; $j < count($columns); $j++){
                if(count($columns) != 9)
                    throw new Exception("out of the number of columns at line: " + $i);
                $fullName = explode(" ", $columns[1]);
                $player  = new Player(
                            $columns[0], 
                            $fullName[0],
                            $fullName[1],
                            $columns[2],
                            $columns[3],
                            $columns[4],
                            $columns[5],
                            $columns[6],
                            $columns[7],
                            trim($columns[8]));
            }
        } catch(Exception $e){
            echo $e->getMessage();
        }
        
        $this->team->addPlayer($player);
    }
    $this->team->sortByLastName();
    return $this->team;
 }

}

?>