<?php


require_once("inc/Utilities/Page.class.php");
require_once("inc/Entities/Message.class.php");

//Start the session
session_start();

if ($_SERVER['REQUEST_METHOD'] == "GET" && !empty($_GET))  {
    if ($_GET['action'] == "clear") {
        unset($_SESSION);
        // session_destroy();
    }
}

//Create a new Message
if (!empty($_POST)) {
    $m = new Message();
    $m->setMessage($_POST["message"]);

    $_SESSION['messages'][] = $m;
}

Page::header();

if (!empty($_SESSION["messages"]))  {
    Page::showMessages($_SESSION['messages']);
}

Page::addForm();
Page::footer();

?>