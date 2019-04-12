<?php

//Config
require_once("inc/config.inc.php");
//Entities
require_once("inc/Entities/Book.class.php");

//Utility Classes
require_once("inc/Utility/Validation.class.php");
require_once("inc/Utility/RestClient.class.php");
require_once("inc/Utility/Page.class.php");

// handle delete
if(isset($_GET['action']) && !empty($_GET['action'])){
    // detelt 
    if($_GET['action'] == 'delete'){
        RestClient::call('DELETE', array('isbn' => $_GET['isbn']));
    }
}




$jsonBooks = RestClient::call('GET', array());
$jsonBooks = json_decode($jsonBooks);
$books = array();
foreach($jsonBooks as $jbook){
    $b = new Book();
    $b->setISBN($jbook->ISBN);
    $b->setTitle($jbook->Title);
    $b->setAuthor($jbook->Author);
    $b->setPrice($jbook->Price);
    $books[] = $b;
}
Page::header();
Page::listBooks($books);
$book = null;
Page::showAddForm($book);
Page::footer();
?>