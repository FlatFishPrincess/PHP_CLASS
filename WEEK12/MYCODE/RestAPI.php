<?php 
require_once("inc/config.inc.php");
//Entities
require_once("inc/Entities/Book.class.php");
//Utility Classes
require_once("inc/Utility/PDOAgent.class.php");
require_once("inc/Utility/BooksMapper.class.php");
require_once("inc/Utility/Page.class.php");

BooksMapper::initialize("Book");

// pull the request data from the input stream
// parse_str(string,array) 
// The file_get_contents() reads a file into a string.
parse_str(file_get_contents('php://input'), $requestDemo);

switch($_SERVER["REQUEST_METHOD"]){
    case "GET":
        // get all the books
        $books = BooksMapper::getBooks();
        // Initialize an array to hold the serialized books
        $serializedBooks = array();

        // go through all the books and add them to the serialized array
        foreach($books as $boo){
            $serializedBooks[] = $book->jsonSerialize();
        }
        var_dump($books);
        // set the header
        header('Content-type: application/json');

        echo json_encode($serializedBooks);
        break;
}

?>