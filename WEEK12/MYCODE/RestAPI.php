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
parse_str(file_get_contents('php://input'), $requestData);

var_dump($requestData);

switch($_SERVER["REQUEST_METHOD"]){

    case "GET":
        // header('Content-Type: application/json');
        // if(isset($requestData) && !empty($requestData)){
        //     $book = BooksMapper::getBook($requestData['ISBN']);
        //     $jbook = $book->jsonSerialize();
        //     header('Content-Type: application/json');
        //     echo json_encode($jbook);
        // } else {
            // get all the books
            $books = BooksMapper::getBooks();
            // Initialize an array to hold the serialized books
            $serializedBooks = array();
            // go through all the books and add them to the serialized array
            foreach($books as $book){
                $serializedBooks[] = $book->jsonSerialize();
            }
            // header('Content-Type: application/json');
            echo json_encode($serializedBooks);
            var_dump($serializedBooks);
        // } 
    break;

    case "POST":
        // new book
        $nb = new Book();
        $nb->setISBN($requestData['isbn']);
        $nb->setTitle($requestData['title']);
        $nb->setAuthor($requestData['author']);
        $nb->setPrice($requestData['price']);

        // add book to DB
        $result = BooksMapper::createBook($nb);
        header('Content-Type: application/json');
    break;

    case "DELETE":
        $result = BooksMapper::deleteBook($requestData['isbn']);
        header('Content-Type: application/json');
        echo json_encode($result);
    break;

    default:
        echo json_encode(array("message"=> "HTTP?"));
    break;
        
}

?>