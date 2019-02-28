<?php 
    
    function getFileContents(){
       try{
            $fh = fopen(DATA, 'r');
            $contents = fread($fh, filesize(DATA));
            fclose($fh);
       } catch(Exception $e){
            html_errors(array($fe->getMessage()));
            die();
       }
        return $contents;
    }
?>