<?php

/**
 * Student Name:            Jiweon Park
 * Student Number:          300281074
 * Assignment/File Name:    Lab04
 * 
 * Description: 
 * 
 * This portion describes the File/Assignment
 * 
 * References:
 * 
 * This portiion is for any references you ror your assignment 
 * please make sure you provide the appropriate url references
 * or any comment for example if you referenced some help you
 * received from your instructor or some demo code provided in
 * class.
 * 
 * STOP!!! 
 * Did you follow the Assignment Submission Guidlines?
 * Did you double check your submission runs in anohter directory or on another computer?
 *  
 *      
**/


//
function getFileContents()  {

	//Try to open the file and read the contents
	try{
		// create file handle
		$fh = fopen(DATA,"r");
		$fileContents = fread($fh,filesize(DATA));
		fclose($fh);
	} catch(Exception $fe){
        html_errors(array($fe->getMessage()));
        // terminates running time
        die();
    }
	//return the contents if successful, if not write an error and die.
	return $fileContents;
}

?>