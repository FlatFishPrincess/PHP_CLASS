<?php 
    class MobileParser{

        public static $mobiles = array();

        static function parseMobiles($fileContents){
            // split by new line
            $lines = explode("\n", $fileContents);

            // get the phone
            for($x = 1; $x < count($lines); $x++){
                $columns = explode(",", $lines[$x]);
                try{
                    if(count($columns) != 5)
                        throw new Exception("Problemn parsing file at line: " . ($x + 1));

                    $m = new Mobile($columns[0],
                        $columns[1],
                        $columns[2],
                        $columns[3],
                        $columns[4]);

                    /*
                    another way to initialize with constuctor
                    $m->type = $columns[0];    
                    $m->cpu_type = $columns[1];    
                    $m->formFactor = $columns[2];    
                    $m->RAM = $columns[3];    
                    $m->color = $columns[4];  
                    */

                    self::$mobiles[] = $m;
                } catch(Exception $e){
                    echo $e->getMessage();
                }
            }
        }
    }
?>