<?php 

require_once('inc/config.inc.php');
require_once('inc/Page.class.php');
require_once('inc/RestClient.class.php');

Page::header();

//var_dump($_GET);
//var_dump($result);

if (!empty($_GET['requesttype']))   {
    $result = RestClient::call($_GET['requesttype']);
    Page::showResult($result);
}

Page::requestForm();

Page::footeR();

?>

