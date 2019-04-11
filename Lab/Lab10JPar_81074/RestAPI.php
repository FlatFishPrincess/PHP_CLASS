<?php 
require_once("inc/config.inc.php");
//Entities
require_once("inc/Entities/Customer.class.php");
//Utility Classes
require_once("inc/Utility/PDOAgent.class.php");
require_once("inc/Utility/CustomersMapper.class.php");
require_once("inc/Utility/Page.class.php");

CustomersMapper::initialize("Customer");

// pull the request data from the input stream
// parse_str(string,array) 
// The file_get_contents() reads a file into a string.
parse_str(file_get_contents('php://input'), $requestData);

var_dump($requestData);

switch($_SERVER["REQUEST_METHOD"]){
    case "GET":
        // header('Content-Type: application/json');
        // if(isset($requestData) && !empty($requestData['customerId'])){
        //     $customer = CustomersMapper::getBook($requestData['customerId']);
        //     $jcustomer = $customer->jsonSerialize();
        //     // header('Content-Type: application/json');
        //     echo json_encode($jcustomer);
        // } else {
            // get all the books
            $customers = CustomersMapper::getCustomers();
            // Initialize an array to hold the serialized books
            $serializedCustomers = array();
            // go through all the books and add them to the serialized array
            foreach($customers as $customer){
                $serializedCustomers[] = $customer->jsonSerialize();
            }
            // header('Content-Type: application/json');
            echo json_encode($serializedCustomers);
        //} 
    break;

    case "POST":
        // new customer
        $nc = new Customer();
        $nc->setAddress($requestData['address']);
        $nc->setCity($requestData['city']);
        $nc->setName($requestData['name']);

        // add Customer to DB
        $resultId = CustomersMapper::createCustomer($nc);
        $result = CustomersMapper::getCustomer($resultId);
        // header('Content-Type: application/json');
        echo json_encode($result);

    break;

    case "DELETE":
        $result = CustomersMapper::deleteCustomer($requestData['customerId']);
        header('Content-Type: application/json');
        echo json_encode($result);
    break;

    default:
        echo json_encode(array("message"=> "HTTP?"));
    break;
        
}

?>