<?php

//Config
require_once("inc/config.inc.php");
//Entities
require_once("inc/Entities/Book.class.php");

//Utility Classes
require_once("inc/Utility/PDOAgent.class.php");
require_once("inc/Utility/BooksMapper.class.php");
require_once("inc/Utility/Page.class.php");



BooksMapper::initialize("Book");

if (!empty($_GET))  {
    if ($_GET["action"] == "delete")    {
        BooksMapper::deleteBook($_GET["isbn"]);
    }
}

//Process any post data
if (!empty($_POST)) {
    //Assemble the book
    $nb = new Book;
    $nb->setTitle($_POST["title"]);
    $nb->setISBN($_POST["isbn"]);
    $nb->setAuthor($_POST["author"]);
    $nb->setPrice($_POST["price"]);

    //Add the book to the database
    BooksMapper::createBook($nb);
}

// BooksMapper::createBook($b);
$books = BooksMapper::getBooks();

Page::$title = "CSIS 3280 Week9 Demo";
Page::header();
Page::listBooks($books);
Page::showAddForm();
Page::footer();
