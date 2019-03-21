<?php

//Config
require_once("inc/config.inc.php");
//Entities
require_once("inc/Entities/Customer.class.php");

//Utility Classes
require_once("inc/Utility/PDOAgent.class.php");
require_once("inc/Utility/CustomersMapper.class.php");
require_once("inc/Utility/Page.class.php");

CustomersMapper::initialize("Customer");

$customerToUpdate = null;
if (!empty($_GET))  {
    if ($_GET["action"] == "delete")    {
        CustomersMapper::deleteCustomer($_GET["customerId"]);
    }
    if ($_GET["action"] == "edit")    {
        $customerToUpdate = new Customer;
        $customerToUpdate = CustomersMapper::getCustomer($_GET["customerId"]);
    }
}

//Process any post data
if (!empty($_POST)) {
    //Assemble the Customer
    $customer = new Customer;
    $customer->setName($_POST["name"]);
    $customer->setCity($_POST["city"]);
    $customer->setAddress($_POST["address"]);
    $customer->setCustomerID($_POST["customerId"]);
    // if post_ customerID not empty, then upadate, otherwise create customer
    //Add Customer
    if(isset($_POST["customerId"]) && !empty($_POST["customerId"]))
        CustomersMapper::updateCustomer($customer);
    else 
        CustomersMapper::createCustomer($customer);

}

// BooksMapper::createBook($b);
$customers = CustomersMapper::getCustomers();

Page::header();
Page::listCustomers($customers);

// get customerToEdit 
Page::showAddForm($customerToUpdate[0]);
Page::footer();
