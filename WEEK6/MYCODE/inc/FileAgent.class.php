<?php 
    class FileAgent{
        static function read(){
            try{
                // Declare a file handle and open the file
                $fh = fopen(DATA_FILE, 'r');
                // Read the contents
                $contents = fread($fh, filesize(DATA_FILE));
                // Close file handle
                fclose($fh);
                if(!$fh){
                    throw new Exception("File ". DATA_FILE . "is not found!");
                }
            } catch(Exception $e){
                echo $fe->getMessage();
            }
            return $contents;
        }

        static function write($post){
            $contentToWrite = "\n" . implode(",", $post);
            try{
                // Write only. It opens and writes to the end of the file  
                // or creates a new file if it doesn’t exist.
                $fh = fopen(DATA_FILE, 'a');
                fwrite($fh, $contentsToWrite);
                fclose($fh);
                if(!$fh){
                    throw new Exception("File ". DATA_FILE . "is not found!");
                }
            } catch(Exception $e){
                echo $fe->getMessage();
            }
        }
    }

?>