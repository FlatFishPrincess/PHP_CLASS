<?php

require_once('inc/config.inc.php');
require_once('inc/Entities/Book.class.php');
require_once('inc/Utility/PDOAgent.class.php');
require_once('inc/Utility/BooksMapper.class.php');

BooksMapper::initialize("Book");

//Pull the request data from the input stream
parse_str(file_get_contents('php://input'), $requestData);

switch($_SERVER["REQUEST_METHOD"])  {
    case "GET":
        if(isset($requestData) && !empty($requestData['isbn'])){
            $book = BooksMapper::getBook($requestData['isbn']);
            $jsonBook = $book->jsonSerialize();
            header('Content-Type: application/json');
            echo json_encode($jsonBook);
        } else {
            // get all books 
            $books = BooksMapper::getBooks();
            $serializedBooks = array();
            //Go through all the books and add them to the serialized array
            foreach ($books as $book)   {
                $serializedBooks[] = $book->jsonSerialize();
            }
            // var_dump($serializedBooks);
            header('Content-Type: application/json');
            echo json_encode($serializedBooks);
        }
    break;
    case "POST":
        //get request book data
        $newBook = new Book();
        $newBook->setISBN($requestData['isbn']);
        $newBook->setAuthor($requestData['author']);
        $newBook->setPrice($requestData['price']);
        $newBook->setTitle($requestData['title']);
        $newBookId = BooksMapper::createBook($newBook);
        header('Content-Type: application/json');
        echo json_encode($newBookId);
    break;
    case "DELETE":
        // get isbn, then deelte
        $isbnToDelete = $requestData['isbn'];
        if(BooksMapper::deleteBook($isbnToDelete)){
            header('Content-Type: application/json');
            echo json_encode($result);
        }
    break;
    case "PUT" : 
        $updateBook = new Book();
        $updateBook->setISBN($requestData['isbn']);
        $updateBook->setAuthor($requestData['author']);
        $updateBook->setPrice($requestData['price']);
        $updateBook->setTitle($requestData['title']);
        $newBookId = BooksMapper::updateBook($updateBook);
        header('Content-Type: application/json');
        echo json_encode($newBookId);
    break;
        
}