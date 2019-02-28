<?php

//This function takes the contents of a CSV file and returns a two-dimensional array of the data
function parseRoster($fileContents)  {
 $roster = array();

  $lineArr = explode("\n", $fileContents);
  for($i = 1; $i<count($lineArr); $i++){
      $columns = explode(",", $lineArr[$i]);
      try{
        if(count($columns) != 3){
            throw new Exception("Invalid number of columns on line " . ($i + 1));
        } else {
            for($j = 0; $j < count($columns); $j++){
                $columns[$j] = trim($columns[$j]);
            }
            $roster[] = $columns;
        }
      } catch(Exception $e){
            html_errors(array($e->getMessage()));
      }
  }
  return $roster;
}


//Sort by name and return the data
function sortbyName($rosterData)    {
   usort($rosterData, "cmpSortName");
   return $rosterData;
}

//Sort by payroll return the data
function sortbyPayroll($rosterData) {
    usort($rosterData, "cmpSortPayroll");
    return $rosterData;
}

//Sort by wins and return the data
function sortbyWins($rosterData) {
    usort($rosterData, "cmpSortWins");
   return $rosterData;
}

//Comparator function for sorting by name
function cmpSortName ($x, $y)   {
   if($x[0] == $y[0]) return 0;
   return ($x[0] > $y[0]) ? 1 : -1; 
}

//Comparator function for sorting by payroll
function cmpSortPayroll ($x, $y)   {
    if($x[1] == $y[1]) return 0;
   return ($x[1] > $y[1]) ? 1 : -1; 
}

//Comparator function for sorting by wins
function cmpSortWins ($x, $y)   {
    if($x[2] == $y[2]) return 0;
   return ($x[2] > $y[2]) ? 1 : -1; 
}
?>