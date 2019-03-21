<?php

//Config
require_once("inc/config.inc.php");
//Entities
require_once("inc/Entities/Book.class.php");

//Utility Classes
require_once("inc/Utility/PDOAgent.class.php");
require_once("inc/Utility/BooksMapper.class.php");

$b = new Book;
$b->setISBN("123-123-123");
$b->setTitle("Crazy Rahim's PHP Book");
$b->setPrice(19.99);
$b->setAuthor("Crazy Rahim");

BooksMapper::initialize("Book");
// BooksMapper::createBook($b);
$books = BooksMapper::getBooks();

var_dump($books);
