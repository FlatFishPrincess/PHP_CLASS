
<?php

// | CustomerID | Name            | Address            | City         |
// +------------+-----------------+--------------------+--------------+
// |          1 | Julie Smith     | 25 Oak Street      | Airport West |
// |          2 | Alan Wong       | 1/47 Haines Avenue | Box Hill     |
// |          3 | Michelle Arthur | 357 North Road     | Yarraville   |

class Customer  {

    private $Name;
    private $Address;
    private $City;
    private $CustomerID;

    //Getters
    function getName() : string     {
        return $this->Name;
    }

    function getAddress() : string   {
        return $this->Address;
    }

    function getCity() : string {
        return $this->City;
    }

    function getCustomerID() : int {
        return $this->CustomerID;
    }

    //Setters
    function setName(string $name)   {
        $this->Name = $name;
    }

    function setAddress(string $address) {
        $this->Address = $address;
    }

    function setCity(string $city)   {
        $this->City = $city;
    }

    function setCustomerID(string $CustomerID)   {
        $this->CustomerID = $CustomerID;
    }
}

?>