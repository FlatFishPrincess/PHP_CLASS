<?php 

class FileAgent {
    static function read() {
        // Declare a file handle
       
        try {
            // Open the file 
            $fh = fopen(DATA_FILE, 'r');
            
            // Read the contents
            $contents = fread($fh, filesize(DATA_FILE));
            
            // Close the handle
            fclose($fh);

            if(!$fh) {
                throw new Exception("File ".DATA_FILE." could not be found!");
            }
        } catch (Exception $fe) {
            echo $fe->getMessage();
        }


        return $contents;
    }

    // write to a file
    static function write($post) {
        $contentToWrite = "\n".implode(",", $post);
        try {
            $fh = fopen(DATA_FILE, 'a');
            fwrite($fh, $contentToWrite);
            fclose($fh);

            if (!$fh) {
                throw new Exception("File ".DATA_FILE. " could not be read!");
            }
        } catch (Exception $fe) {
            echo $fe->getMessage();
        }
    }
}

?>