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

// hangman array has character and boolean for if user guessed or not
// get the first version  

// 

$hangman = getArray();

//This function prints out the hangman in its masked form.
function printMasked(& $hangman)  {
    $str = "";
    for($i = 0; $i<count($hangman); $i++){
        if($hangman[$i][1]){
            print strtoupper($hangman[$i][0]);
        } else {
            print "*";
        }
    }
    print "\n";
}

//This function handles the user guessing a character
function guessChar(& $hangman, $userChar)   {
    
    for($j = 0; $j<count($hangman); $j++){
        if($hangman[$i][0] == $userChar){
            $hangman[$i][1] = true;
        }
    }
}

//This function checks to see if the user has entered all the correct characters, if true it contratulates the user and exists.
function checkStatus(& $hangman)    {
    $complete = false;
   
    foreach($hangman as $letterArr){
        if($letterArr[1] == false){
            $complete = false;
        }
    }

    if($complete){
        print "Congratulation";
        exit;
    }
}

//This function prompts the user for input and then creatds the datastructure for the game;
function getWord()  {
    //Here are the random pizza types, you may not use this array or modify it in the program, you may only pick a value from it!.
    $pizzaTypes = ['Marinara', 
        'Margherita', 
        'Chicago', 
        'Tomato', 
        'Sicilian', 
        'Greek', 
        'California'];
    
    //Shuffle the array, pull one from the top or find the length of the array and select a random number.
    $randomIndex = rand(0,sizeOf($pizzaTypes) - 1);
    $word = $pizzaTypes[$randomIndex];

    $str = "";
    
    // get the datastructure from randomly selected word  
    $hangman = getArray($word);
    echo 'size' .  sizeof($hangman);
    for($index = 0; $index< sizeof($hangman); $index++){
        $str += "*";
    }
    echo "Guess the letters for the following word: " . "\n" . $str . "\n";
    $numOfTries = getTries($word);
    $isDone = false;

    while(!$isDone && $numOfTries<0){
        // get user input
        echo "Please enter a guess:";
        $input = stream_get_line(STDIN, 2014, PHP_EOL);
        $structuredArr = guessChar($hangman, $input);
        $isDone = checkStatus($structuredArr);
        if($isDone){
            echo "Congratulartion, you win!";
            break;
        } 
        echo "You have " . $numOfTries . "left!";
        $numOfTries--;
    }

    
}

function getArray($word)    {
    //Get the datastructure we are going to use for the rest of the program based on the word that was randomly selected.
    $hangman = str_split($word);
    for( $i = 0; $i < strlen($word); $i++){
        $hangman[$i] = array($hangman[$i], false);
    }
    return $hangman;
}

//Thus function returns the number of tries that the user should get based on the word that was selected.
function getTries(& $word)    {
    //Remember you want 2x the number of letters in the word
    $tries = strlen($word) * 2;
    return $tries;
}
?>