<?php 

class MobileParser {
    public static $mobiles = array();
    
    static function parseMobiles($fileContents) {

        // split by new line 
        $lines = explode("\n", $fileContents);

        // walk the lines get the phones
        for($x = 1; $x < count($lines); $x++) {
            
            //Get the columns for each line
            $columns = explode(",",$lines[$x]);
        
            //Check the columns are equal to the number we expect
            try {
                if (count($columns) !=5) {
                    throw new Exception("Problem parsing file at line: " . ($x+1));
                }

                //Ceate a new mobile
                $m = new Mobile($columns[0], 
                    $columns[1],
                    $columns[2],
                    $columns[3], 
                    $columns[4]);
                
                //If you didnt have a default constructor you could do ti this way.
                /*
                $m = new Mobile();

                $m->type = $columns[0];
                $m->cpu_type = $columns[1];
                $m->formFactor = $columns[2];
                $m->RAM = $columns[3];
                $m->color = $columns[4];

                */

                //Add the object to our list of Mobiles
                self::$mobiles[] = $m;


           } catch(Exception $pe) {
               //Display an error message out to the user.
                echo $pe->getMessage();
           }
            
        }
    }
}

?>