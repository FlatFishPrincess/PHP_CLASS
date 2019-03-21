<?php

//This function reads a file.
function read($fileName) {
    try {
        //Get a handle on the file
        $fh = fopen($fileName,'r');
        $fileContents = fread($fh,filesize($fileName));
            fclose($fh);
    } catch (Exception $fe)    {
        html_error(array($fe->getMessage()));
    }

    return $fileContents;
}

?>