<?php

require_once('inc/config.inc.php');
require_once('inc/Entities/Book.class.php');
require_once('inc/Utility/PDOAgent.class.php');
require_once('inc/Utility/BooksMapper.class.php');

parse_str(file_get_contents('php://input'), $requestData);
BooksMapper::initialize("Book");
switch($_SERVER["REQUEST_METHOD"]){
    case "GET":
        $books = BooksMapper::getBooks();
        $serializedBooks = array();
        foreach($books as $book){
            $serializedBooks[] = $book->jsonSerialize();
        }
        header('Content-Type: application/json');
        echo json_encode($serializedBooks);
    break;
    case "DELETE":
        $deleteIsbn = $requestData['isbn'];
        if(BooksMapper::deleteBook($deleteIsbn)){
            header('Content-Type: application/json');
            echo json_encode(true);
        }
    break;
}

?>