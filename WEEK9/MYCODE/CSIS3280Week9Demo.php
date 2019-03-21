<?php 
    // config
    require_once("inc/config.inc.php");
    // entity
    require_once("inc/Entities/Book.class.php");
    // utilities
    require_once("inc/Utility/PDOAgent.class.php");
    require_once("inc/Utility/BooksMapper.class.php");
    require_once("inc/Utility/Page.class.php");

    $b = new Book;
    $b->setISBN("123-123-13");
    $b->setTitle("Jiweon PHP BOOK");
    $b->setAuthor("Jiweon Park");
    $b->setPrice(19.99);

    // // var_dump($b);
    BooksMapper::initialize("Book");

    $books = BooksMapper::getbooks();
    var_dump($books);

    Page::header();
    Page::showAddForm();
    Page::listBooks($books);
    Page::footer();
    BooksMapper::createBook($b);
?>