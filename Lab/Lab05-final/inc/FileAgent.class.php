<?php

class FileAgent {

    static function read($dataFile){
        try{
          $fo = fopen($dataFile, 'r');
          $contents = fread($fo, filesize($dataFile));
          fclose($fo);
        } catch(Exception $e){
            echo $fe->getMessage();
        }
        return $contents;
    }

    static function write($dataFile, $contents){
        try{
            $fo = fopen($dataFile, 'w');
            fwrite($fo, $contents);
            fclose($fo);
        } catch(Exception $e){
            echo $fe->getMessage();
        }
    }
    
}

?>