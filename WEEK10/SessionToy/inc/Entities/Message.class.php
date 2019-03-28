<?php


class Message   {
    private $dateTime;
    private $message;

    //Default Constructor for message and datetime
    function __construct()  {

        $this->datetime = date("Y/m/d-H:m:s");
    }

    function getDateTime()  {
        return $this->datetime;
    }

    function getMessage()   {
        return $this->message;
    }
    
    function setMessage(string $message)   {
        $this->message = $message;
    }
}