<?php

class FileAgent {

    static function read($dataFile){
        try{
            // Declare a file handle and open the file
            $fh = fopen($dataFile, 'r');
            // Read the contents
            $contents = fread($fh, filesize($dataFile));
            // Close file handle
            fclose($fh);
            if(!$fh){
                throw new Exception("File ". $dataFile . "is not found!");
            }
        } catch(Exception $e){
            echo $fe->getMessage();
        }
        return $contents;
    }
    
}

?>