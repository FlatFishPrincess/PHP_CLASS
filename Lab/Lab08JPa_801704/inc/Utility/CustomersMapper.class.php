<?php

class CustomersMapper {

    //Place to store the PDO Agent
    private static $db;

    static function initialize(string $className)   {
        
        self::$db = new PDOAgent($className);

    }

    // +------------+------------------+------+-----+---------+----------------+
    // | Field      | Type             | Null | Key | Default | Extra          |
    // +------------+------------------+------+-----+---------+----------------+
    // | CustomerID | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
    // | Name       | char(50)         | NO   |     | NULL    |                |
    // | Address    | char(100)        | NO   |     | NULL    |                |
    // | City       | char(30)         | NO   |     | NULL    |                |
    // +------------+------------------+------+-----+---------+----------------+
    
    static function createCustomer(Customer $newCustomer) : int   {
        $sqlInsert = "INSERT INTO Customers (Name, Address, City) VALUES (:name, :address, :city)";

        self::$db->query($sqlInsert);

        self::$db->bind(':name', $newCustomer->getName());
        self::$db->bind(':address', $newCustomer->getAddress());
        self::$db->bind(':city', $newCustomer->getCity());

        self::$db->execute();

        return self::$db->lastInsertId();
    }

    static function getCustomers() : Array {
        
        $selectAll = "SELECT * FROM Customers;";

        self::$db->query($selectAll);
        self::$db->execute();
        return self::$db->resultSet();
    }

    static function deleteCustomer(string $customerID) : bool {
        $deleteSQLQuery = "DELETE FROM Customers WHERE CustomerID = :customerID;";

        try {
            self::$db->query($deleteSQLQuery);
            self::$db->bind(':customerID', $customerID);
            self::$db->execute();

            if (self::$db->rowCount() != 1) {
                throw new Exception("Problem deleting cutsomer $customerID");
            }
        } catch(Exception $ex) {
            echo $ex->getMessage();
            self::$db->debugDumpParams();
            return false;
        }
        return true;

    }

    static function getCustomer(string $customerID) {
        $selectCustomer = "SELECT * FROM Customers WHERE CustomerID = :customerID;";
        self::$db->query($selectCustomer);
        self::$db->bind(':customerID', $customerID);
        self::$db->execute();
        return self::$db->resultSet();
    }

    static function updateCustomer(Customer $ustomerToUpdate ) : bool {
        $updateQuery = "UPDATE Customers set Name=:name, Address = :address, City = :city WHERE CustomerID = :customerID;";
        try {
            self::$db->query($updateQuery);
            self::$db->bind(':name', $ustomerToUpdate->getName());
            self::$db->bind(':address', $ustomerToUpdate->getAddress());
            self::$db->bind(':city', $ustomerToUpdate->getCity());
            self::$db->bind(':customerID', $ustomerToUpdate->getCustomerID());
            self::$db->execute();
        } catch(Exception $ex) {
            echo $ex->getMessage();
            self::$db->debugDumpParams();
            return false;
        }
        return true;
    }

}

?>