<?php 
require_once("./inc/config.inc.php");
//Entities
require_once("./inc/Entities/Customer.class.php");
//Utility Classes
require_once("./inc/Utility/PDOAgent.class.php");
require_once("./inc/Utility/Page.class.php");
require_once("./inc/Utility/RestClient.class.php");

//Process any post data
if (!empty($_POST)) {
    RestClient::call('POST',$_POST);
}

// if (!empty($_GET))  {
//     if ($_GET["action"] == "delete")    {
//         //Make a REST call out to the WS
//         RestClient::call("DELETE",array('isbn'=>$_GET['isbn']));
//     }
// }

// get all the customers
$result = RestClient::call('GET', array());

//De-serialize the result of the Rest call.
$jcustomers = json_decode($result);
var_dump($jcustomers);
// var_dump($jcustomers);
//Store them in a new array as proper "Book" objects
$customers = array();

foreach ($jcustomers as $c)  {
    //Assemble a new book class
    $nc = new Customer();
    $nc->setAddress($c->Address);
    $nc->setCity($c->City);
    $nc->setCustomerID($c->CustomerID);
    $nc->setName($c->Name);
    //append the new
    $customers[] = $nc;
}
// var_dump($customers);

Page::$title = "Lab10";
Page::header();
Page::listCustomers($customers);
Page::showAddForm();
Page::footer();

?>