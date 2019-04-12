<?php

require_once('inc/config.inc.php');
require_once('inc/Entities/Book.class.php');
require_once('inc/Utility/PDOAgent.class.php');
require_once('inc/Utility/BooksMapper.class.php');

BooksMapper::initialize("Book");

//Pull the request data from the input stream
parse_str(file_get_contents('php://input'), $requestData);

switch($_SERVER["REQUEST_METHOD"])  {
    //Its  a GET request, time to read!
    case "GET":

    if (isset($requestData['isbn']))  {

        $book = BooksMapper::getBook($requestData['isbn']);

        $jbook = $book->jsonSerialize();

        header('Content-Type: application/json');
        echo json_encode($jbook);

    } else {
        //Get all the books
        $books = BooksMapper::getBooks();

        //Initialize an array to hold the serialized books
        $serializedBooks = array();

        //Go through all the books and add them to the serialized array
        foreach ($books as $book)   {
            $serializedBooks[] = $book->jsonSerialize();
        }

        //Set the header
        header('Content-Type: application/json');
        //Return all the books!
        echo json_encode($serializedBooks);

    }
    break;

    //Do the insert thing...
    case "POST":

        //New Book
        $nb = new Book();
        $nb->setISBN($requestData['isbn']);
        $nb->setTitle($requestData['title']);
        $nb->setAuthor($requestData['author']);
        $nb->setPrice($requestData['price']);
        
        //Add book to DB
        $result = BooksMapper::createBook($nb);

        //REturn result
        header('Content-Type: application/json');
        //Return the result.
        echo json_encode($result);

    break;

    //Delete all the things!
    case "DELETE":

        $result = BooksMapper::deleteBook($requestData['isbn']);

        header('Content-Type: application/json');
        echo json_encode($result);

    break;

    default:
        echo json_encode(array("message" => "Voce fala HTTP?"));
    break;
    
}