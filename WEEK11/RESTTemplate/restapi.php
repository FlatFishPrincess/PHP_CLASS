<?php

switch ($_SERVER['REQUEST_METHOD']) {
    
    case "GET":
    case "POST":
    case "DELETE":
    case "PUT":
        parse_str(file_get_contents('php://input'), $requestData);
        echo json_encode($requestData);      
    break;

    default:
        echo json_encode(array("message"=> "There was an error processing your request."));
    break;
}

?>