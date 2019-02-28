<?php

//This function takes the contents of a CSV file and returns a two-dimensional array of the data
function parseRoster($fileContents)  {
    
    //Declare an array
    $roster = array();
    
    //Explode by newline character
    $lines = explode("\n", $fileContents);

    //For each line in the above
    for($i = 1; $i<count($lines); $i++){
        $columns = explode(",", $lines[$i]);

        try{
             //Check for the appropriate number of columns in the file
            if(count($columns) != 3){
                throw new Exception("Invalid number of columns on line " . ($i + 1));
            } else {
                // If appropriate columns, trim any white space
                // then add them to the array to return
                for($j = 0; $j < count($columns); $j++){
                    $columns[$j] = trim($columns[$j]);
                }
                $roster[] = $columns;
                // $roster[] = explode(",", $columns[]$i); => can be used as this
            }
        } catch (Exception $e){
            html_errors(array($e->getMessage()));
        }
    }
    sort($roster);
    return $roster;
}


//Sort by name and return the data
function sortbyName($rosterData)    {
    usort($rosterData, 'cmpSortName');
    return $rosterData;
}

//Sort by payroll return the data
function sortbyPayroll($rosterData) {
    usort($rosterData, 'cmpSortPayroll');
    return $rosterData;
}

//Sort by wins and return the data
function sortbyWins($rosterData) {
    usort($rosterData, 'cmpSortWins');
    return $rosterData;
}

//Comparator function for sorting by name
function cmpSortName ($x, $y)   {
    return strcmp($x[0], $y[0]);
}

//Comparator function for sorting by payroll
function cmpSortPayroll ($x, $y)   {
    if ($x[1] == $y[1]) {
        return 0;
    }
    return ($x[1] < $y[1]) ? 1 : -1;
}

//Comparator function for sorting by wins
function cmpSortWins ($x, $y)   {
    if ($x[2] == $y[2]) {
        return 0;
    }
    return ($x[2] < $y[2]) ? 1 : -1;
}
?>