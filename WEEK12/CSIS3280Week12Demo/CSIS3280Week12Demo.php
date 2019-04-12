<?php

//Config
require_once("inc/config.inc.php");
//Entities
require_once("inc/Entities/Book.class.php");

//Utility Classes
require_once("inc/Utility/Validation.class.php");
require_once("inc/Utility/RestClient.class.php");
require_once("inc/Utility/Page.class.php");
$bookUpdate = null;

// Delete 
if(isset($_GET['action']) && isset($_GET['isbn'])){
    if($_GET['action'] == "delete"){
        RestClient::call('DELETE', array('isbn' => $_GET['isbn']));
    }
    if($_GET['action'] == "update"){
        $jsonBook = RestClient::call('GET', array('isbn' => $_GET['isbn']));
        $jsonBook = json_decode($jsonBook);
        $bookUpdate = new Book();
        $bookUpdate->setISBN($jsonBook->ISBN);
        $bookUpdate->setAuthor($jsonBook->Author);
        $bookUpdate->setPrice($jsonBook->Price);
        $bookUpdate->setTitle($jsonBook->Title);
        var_dump($bookUpdate);
    }
}
// Create 
$errors;
if(isset($_POST) && !empty($_POST)){
    Validation::validateInput();
    $errors = Validation::$errors;
    if(!empty($errors)){
        if($_POST['edit'] == "true"){
            $result = RestClient::call('PUT', $_POST);
        } else {
            $result = RestClient::call('POST', $_POST);
        }
    }
   
}

// get books from api and display it 
$jsonBooks = RestClient::call('GET', array());
$decodedBooks = json_decode($jsonBooks);
$books = array();
foreach($decodedBooks as $book){
    $newBook = new Book();
    $newBook->setISBN($book->ISBN);
    $newBook->setAuthor($book->Author);
    $newBook->setPrice($book->Price);
    $newBook->setTitle($book->Title);
    $books[] = $newBook;
}

Page::header();
if(!empty($errors))
    Page::displayErrors($errors);
Page::listBooks($books);
// if user click edit button, then bookUpdate will be initialized
Page::showAddForm($bookUpdate);

