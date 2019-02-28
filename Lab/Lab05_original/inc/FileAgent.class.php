<?php

class FileAgent {
    
    //Store the contents and file nameof the file in properties

    //This function should load the contents of the file
    public static function read($file){
        try{
            $fh = fopen($file, 'r');
            $content = fread($fh, filesize($file));
            if(!$fh)
                throw new Exception("File ". $file . "is not found!");
            fclose($fh);
        } catch(Exception $e){
            echo $e->getMessage();
        }
        return $content;
    }
    
}

?>