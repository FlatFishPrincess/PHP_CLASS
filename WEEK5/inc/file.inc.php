<?php 

// This function reads a file
function read($fileName){
    try{
        // fh is file-handle 
        $fh = fopen($fileName,'r');
        $fileContents = fread($fh,filesize($fileName));
        fclose($fh);
    } catch(Exception $fe){
        html_error(array($fe->getMessage()));
        // terminates running time
        die();
    }
    return $fileContents;
}
?>