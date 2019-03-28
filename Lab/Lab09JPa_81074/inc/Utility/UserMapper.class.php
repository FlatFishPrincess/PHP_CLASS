<?php

class UserMapper    {
    
    //A place to store our DB connection
    private static $db;

    //This function to initiialize the PDO Agent with the user class
    static function initialize(string $className)   {  
        self::$db = new PDOAgent($className);
    }

    //This function gets the user by username
    static function getUserbyName(string $username) {
        //SQL Query
        $selectUser = "SELECT * from users where username=:username;";
        try {
            //Prepare the query
            self::$db->query($selectUser);
            //Set the bind parameters
            self::$db->bind(':username', $username);
            self::$db->execute();
            //Execute the query
            //Get the row
            $result = self::$db->singleResult();
        } catch(Exception $ex) {
            echo $ex->getMessage();
        }
        return $result;
    }
    
    static function listUsers() : Array {
        $selectAll = "SELECT * FROM users;";
        self::$db->query($selectAll);
        self::$db->execute();
        return self::$db->resultSet();
    }

    static function updateUser($user){
        // UPDATE table_name
        // SET column1 = value1, column2 = value2, ...
        // WHERE condition;
        $updateQuery = "update users set firstName = :firstName, 
            lastNAme= :lastName, email=:email, username=:username, password=:password 
            where id= :id";
        try {
            //Prepare the query
            self::$db->query($updateQuery);
            //Set the bind parameters
            self::$db->bind(':firstName', $user->getFirstName());
            self::$db->bind(':lastName', $user->getLastName());
            self::$db->bind(':email', $user->getEmail());
            self::$db->bind(':username',$user->getUsername());
            self::$db->bind(':password', $user->getPassword());
            self::$db->bind(':id', $user->getId());
            self::$db->execute();
            //Execute the query
        } catch(Exception $ex) {
            echo $ex->getMessage();
        }
        return true;
    }


}

?>