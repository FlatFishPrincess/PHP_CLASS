<?php

//Config
require_once("inc/config.inc.php");
//Entities
require_once("inc/Entities/Book.class.php");

//Utility Classes
require_once("inc/Utility/RestClient.class.php");
require_once("inc/Utility/Page.class.php");


if (!empty($_GET))  {
    if ($_GET["action"] == "delete")    {
        //Make a REST call out to the WS
        RestClient::call("DELETE",array('isbn'=>$_GET['isbn']));
    }
}

//Process any post data
if (!empty($_POST)) {
    RestClient::call("POST",$_POST);

    //Add the book to the database
    
}

// BooksMapper::createBook($b);
//$books = BooksMapper::getBooks();

//Get all the books
$result = RestClient::call("GET",array());

//De-serialize the result of the Rest call.
$jbooks = json_decode($result);

//Store them in a new array as proper "Book" objects
$books = array();

foreach ($jbooks as $b)  {
    //Assemble a new book class
    $nb = new Book();
    $nb->setISBN($b->ISBN);
    $nb->setTitle($b->Title);
    $nb->setAuthor($b->Author);
    $nb->setPrice($b->Price);
    //append the new
    $books[] = $nb;
}

Page::$title = "CSIS 3280 Week9 Demo";
Page::header();
Page::listBooks($books);
Page::showAddForm();
Page::footer();
