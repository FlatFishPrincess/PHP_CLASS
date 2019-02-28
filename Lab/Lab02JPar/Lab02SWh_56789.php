<?php

/**
 * Student Name:            First Last
 * Student Number:          123456789
 * Assignment/File Name:    Lab01
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

require('inc/hangman.inc.php');

//Return the word for the user, return the only array we are going ot use!
$word = getWord();

//Get the number of tries we should allow the user (2x the number of characters from the returned pizza type.)
$tries = getTries($word);

//Construct the array we are going to use for the rest of the program based on the Word.
$hangman = getArray($word);

//While the user has tries...
    {

    //Display the masked version to the user on first instance.
    //printMasked()

    //Prompt the user for a letter
    
    //Process the guess

    //Display a masked version of the name according to the attributes in the Array
    

    //Check the game status!
   

    //Tell the user how many tries they have left.
    
    echo "You have $tries left!";

}

//If the counter is at zero then prompt the user that their number of tries is over and exit the program.


?>