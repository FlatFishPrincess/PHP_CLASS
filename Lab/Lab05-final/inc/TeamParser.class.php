<?php

class TeamParser {
    //The team tha the Team parser will use
    private static $team = null;

    //This function will parse our cars data to an array
    public static function parseRoster($fileContents)   {

        self::$team = new Team();
        $lines = explode("\n", $fileContents);
        
        try{
            for($i = 1; $i < count($lines); $i++){
                $columns = explode(",", $lines[$i]);
                if(count($columns) != 9)
                    throw new Exception("Invalid columns");
                $fullName = explode(" ", $columns[1]);
                $player = new Player(
                    $columns[0], $fullName[0], $fullName[1], $columns[2], $columns[3],
                    $columns[4],$columns[5],$columns[6],$columns[7],$columns[8]
                );
                self::$team->addPlayer($player);
            }
        } catch(Exception $e){
            var_dump($e->getMessage());
        }
        
        // var_dump(self::$team);
        usort(self::$team->players, array(self::$team,"compareLastName"));
        return self::$team;
    }

    function compareLastName($x, $y){
        if($x->lastName == $y->lastName) return 0;
        return ($x->lastName > $y->lastName) ? 1 : -1;
    }
    
        //Instantiate a new team
        // $this->team = new Team();

        // //create an array out of each line of the file (split by newline character)
        // $lines = explode("\n", $fileContents);

        // //Iterating through each line of the file
        // for($i = 1; $i < count($lines); $i++){
        //     //Split the columns up into an array
        //     $columns = explode(",", $lines[$i]);
        //     // var_dump($columns);
        //     try{
        //         //Check we have the right amount of columns
        //         if(count($columns) != 9)
        //             throw new Exception("Invalid number of columns on line " + $x);
        //         //Trim out the white space
        //         // here, as full name should be divided into first name and last name, add count + 1 
        //         $fullName;
        //         for($j = 0; $j < count($columns); $j++){
        //             $columns[$j] = trim($columns[$j]);
        //             if($j == 1){
        //                  // store first name and lastname 
        //                 $fullName = explode(" ",$columns[$j]);
        //             }
        //         }
        //         $columns[1] = $fullName[0];
        //         array_splice($columns, 2, 0, $fullName[1]);
        //         //Instantiate a new Player
        //         $newPlayer = new Player($columns[0], 
        //                                 $columns[1],
        //                                 $columns[2], 
        //                                 $columns[3], 
        //                                 $columns[4], 
        //                                 $columns[5], 
        //                                 $columns[6],
        //                                 $columns[7], 
        //                                 $columns[8],  
        //                                 $columns[9]); //player  
        //         // add a Player class to Team Class
        //         $this->team->addPlayer($newPlayer);
        //         // add the Team class into teams array 
                
        //     } catch(Exception $e){
        //         echo $e->getMessage();
        //     }
        // }
        // // sort last name by default
        // usort($this->team->players, array($this, "compareLastName"));
        // return $this->team;
    
}

?>