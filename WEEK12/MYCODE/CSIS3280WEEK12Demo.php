<?php 
require_once("inc/config.inc.php");
//Entities
require_once("inc/Entities/Book.class.php");
//Utility Classes
require_once("inc/Utility/PDOAgent.class.php");
// require_once("inc/Utility/BooksMapper.class.php");
require_once("inc/Utility/Page.class.php");
require_once("inc/Utility/RestClient.class.php");

//Process any post data
if (!empty($_POST)) {
    RestClient::call('GET',$_POST);
}

// get all the books
$result = RestClient::call('GET', array());
$jbooks = json_decode($result);

var_dump($jbooks);
Page::$title = "CSIS 3280 Week9 Demo";
Page::header();
Page::listBooks($books);
Page::showAddForm();
Page::footer();


?>